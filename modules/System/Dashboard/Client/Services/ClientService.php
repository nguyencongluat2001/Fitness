<?php

namespace Modules\System\Dashboard\Client\Services;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Modules\Base\Service;
use Modules\Base\Library;
use Modules\System\Dashboard\Client\Models\AuthenticationOTPModel;
use Modules\System\Dashboard\Client\Repositories\ClientRepository;
use Twilio\Rest\Client;
use Modules\Base\Helpers\ForgetPassWordMailHelper;
use Modules\System\Dashboard\Client\Models\UserModel;
use Str;

class ClientService extends Service
{
    private $baseDis;
    public function __construct(
        ClientRepository $ClientRepository
        )
    {
        parent::__construct();
        $this->ClientRepository = $ClientRepository;
        $this->baseDis = public_path("file-image/avatar") . "/";
    }

    public function repository()
    {
        return ClientRepository::class;
    }
    public function loadList($arrInput){
        $data = array();
        $param = $arrInput;
        $objResult = $this->repository->filter($param);
        $data['datas'] = $objResult;
        $data['param'] = $param;
        $data['pagination'] = $data['datas']->links('pagination.default');
        return $create;
    }
    public function editUser($arrInput){
        $getUserInfor = $this->repository->where('id',$arrInput['chk_item_id'])->first()->toArray();
        // $userInfo = $this->UserInfoService->where('user_id',$arrInput['chk_item_id'])->first();
        $getUserInfor['arrQuyen'] = explode(',',$getUserInfor['role']);
        return $getUserInfor;
    }

    
    /**
     * Cập nhật và thêm mới màn index
     */
    public function _updateUser($input, $id)
    {
        if(isset($input['order'])){
            $this->updateOrder($input);
        }
        $dataUser = $this->repository->where('id', $id)->first();
        $countUser = $this->repository->select('*')->get();
        
        // $code_cp = isset($dataUser->code_cp) ? $dataUser->code_cp : '';
        $order = isset($dataUser) && !empty($dataUser->order) ? $dataUser->order : count($countUser) + 1;
        $param = [
            // 'code_cp' => isset($input['code_cp']) ? $input['code_cp'] : $code_cp,
            'order' => isset($input['order']) ? $input['order'] : $order,
        ];
        if(isset($dataUser) && !empty($dataUser)){
            $param['updated_at'] = date('Y-m-d H:i:s');
            $this->repository->where('id',$id)->update($param);
            return array('success' => true, 'message' => 'Cập nhật thành công!');
        }
    }
    /**
     * Cập nhật thứ tự
     */
    public function updateOrder($input)
    {
        $query = UserModel::select('*')->where('order', '>=', $input['order'])->orderBy('order');
        if(isset($input['id'])){
            $query = $query->where('id', '<>', $input['id']);
        }
        $order = $query->get();
        if(!empty($order)){
            $i = $input['order'];
            foreach($order as $value){
                $i++;
                $this->repository->where('id', $value->id)->update(['order' => $i]);
            }

        }
    }
    /**
     * Thay đổi dòng
     */
    public function upNdown($input)
    {
        $user = $this->repository->where('id', $input['id'])->first();
        try{
            if($input['type'] == 'down' && (int)$user->order > 1){
                $downOrder = UserModel::where('order', '>=', ((int)$user->order + 1))->orderBy('order')->first();
                $order = (int)$user->order + 1;
                $user->order = (int)$user->order + 1;
                $user->save();
                if(!empty($downOrder)){
                    if(($order - $downOrder->order) == 1){
                        $downOrder->order = (int)$downOrder->order - 1;
                    }else{
                        $downOrder->order = (int)$user->order - 1;
                    }
                    $downOrder->save();
                    return array('success' => true, $user->id => $user->order, $downOrder->id => $downOrder->order);
                }
            }elseif($input['type'] == 'up'){
                $downOrder = UserModel::where('order', '<=', ((int)$user->order - 1))->orderBy('order', 'desc')->first();
                $order = (int)$user->order;
                $user->order = (int)$user->order - 1;
                $user->save();
                if(!empty($downOrder)){
                    if(($order - $downOrder->order) == 1){
                        $downOrder->order = (int)$downOrder->order + 1;
                    }else{
                        $downOrder->order = (int)$user->order + 1;
                    }
                    $downOrder->save();
                    return array('success' => true, $downOrder->id => $downOrder->order, $user->id => $user->order);
                }
            }
        }catch(\Exception $e){
            return array('success' => true, 'message', $e->getMessage());
        }
    }
    /**
     * cập nhật người dùng
     */
    public function store($input){
        //check quyền chỉnh sửa
        if($input['id_personnel'] == ''){
            return array('success' => false, 'message' => 'Mã cộng tác viên không được để trống!');
        }
        $check = $this->ClientRepository->where('id_personnel',$input['id_personnel'])->first();

        if(!empty($check)){
            return array('success' => false, 'message' => 'Mã cộng tác viên đã tồn tại!');
        }
        try{
            // array data users
            $arrData = [
                'role'=>  'SALE_BASIC',
                'id_personnel'=> isset($input['id_personnel'])?$input['id_personnel']:'',
                'id_manage'=> isset($input['id_manage'])?$input['id_manage']:'F889',
            ];
            if($input['id'] != ''){
                $updateUser = $this->ClientRepository->where('id',$input['id'])->update($arrData);
                return array('success' => true, 'message' => 'Nâng cấp cộng tác viên thành công');
            }
            
            return true;
        } catch (\Exception $e) {
            return array('success' => false, 'message' => (string) $e->getMessage());
        }
    }
}
