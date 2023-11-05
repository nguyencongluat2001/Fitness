<?php

namespace Modules\Client\Page\UpgradeAcc\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Modules\System\Dashboard\Users\Services\UserService;
use Modules\System\Dashboard\ApprovePayment\Services\ApprovePaymentService;
use Modules\Base\Library;
use Illuminate\Support\Facades\Auth;
use DB;

/**
 * Nâng cấp tk 
 *
 * @author Luatnc
 */
class UpgradeAccController extends Controller
{
    private $baseDis;
    public function __construct(
        UserService $userService,
        ApprovePaymentService $approvePaymentService
    ){
        $this->approvePaymentService = $approvePaymentService;
        $this->userService = $userService;
        $this->baseDis = public_path("file-payment") . "/";
    }
     /**
     * load màn hình 
     *
     * @return view
     */
    public function index(Request $request)
    {
        $data['type_vip'] = null;
        if(!empty($_SESSION['account_type_vip']) && Auth::check()){
            $data['type_vip'] = $_SESSION['account_type_vip'];
        }
        return view('client.upgradeAcc.index',$data);
    }
    /**
     * Hiển thị màn hình nâng cấp
     *
     * @return view
     */
    public function registerVip(Request $request)
    {
        $input = $request->all();
        if(!Auth::check()){
            $data=[
                'status' => 2,
                'message' => 'Vui lòng đăng nhập để nâng cấp tài khoản!',
            ];
            return response()->json($data);
        }
        $account = $this->userService->find($_SESSION['id']);
        $data['users'] = $account;
        $data['time_register'] = date('d-m-Y');
        $data['type_vip'] = $input['vip'];
        return view('client.upgradeAcc.registerVip',compact('data'));
    }
     /**
     * Hiển thị màn hình nâng cấp
     *
     * @return view
     */
    public function updateVip(Request $request)
    {
        if($_FILES == '' || $_FILES == []){
            $data['success'] = false;
            $data['message'] = 'Vui lòng tải ảnh giao dịch thanh toán!';
            return $data;
        }
        $input = $request->input();
        $arrFile = $this->uploadFile($_FILES);
        $account = $this->userService->find($_SESSION['id']);
        $arr = [
            'id'=>(string)\Str::uuid(),
            'user_id'=> $account['id'],
            'type_payment'=> $input['type_payment'],
            'role_client'=> $input['wrap'],
            'image'=> $arrFile[0],
            'status'=> 0,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ];
        $create = $this->approvePaymentService->create($arr);
        $data['success'] = true;
        return $data;
    }
     // /**
    //  * Tải ảnh vào thư mục
    //  */
    public function uploadFile($file)
    {
        $path = $this->baseDis;
        foreach($file as $attValue){
            $fileName = $attValue['name'];
            $random = Library::_get_randon_number();
            $fileName = Library::_replaceBadChar($fileName);
            $fileName = Library::_convertVNtoEN($fileName);
            $sFullFileName = date("Y") . '_' . date("m") . '_' . date("d") . "_" . date("H") . date("i") . date("u") . $random . "!~!" . $fileName;
            move_uploaded_file($attValue['tmp_name'], $path . $sFullFileName);
            $arrImage[] =  $sFullFileName;
        }
        // dd($arrImage);
        return $arrImage;
    }





    // 
    /**
     * Hiển thị màn hình nâng cấp
     *
     * @return view
     */
    public function viewInfo(Request $request)
    {
        $input = $request->all();
        if(!Auth::check() && $input['vip'] != 'TIEU_CHUAN'){
            $data=[
                'status' => 2,
                'message' => 'Vui lòng đăng nhập để nâng cấp tài khoản!',
            ];
            return response()->json($data);
        }
        if(!empty($_SESSION['id'])){
            $account = $this->userService->find($_SESSION['id']);
            $data['users'] = $account;
        }
        $data['time_register'] = date('d-m-Y');
        $data['type_vip'] = $input['vip'];
        return view('client.upgradeAcc.viewInfo',compact('data'));
    }
     // 
    /**
     * Hiển thị màn liên hệ
     *
     * @return view
     */
    public function viewFormContact(Request $request)
    {
        return view('client.upgradeAcc.viewFormContact');
    }
   
}
