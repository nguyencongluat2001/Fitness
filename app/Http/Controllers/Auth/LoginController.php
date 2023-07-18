<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\System\Dashboard\Users\Services\UserService;
use Modules\System\Dashboard\Users\Services\UserInfoService;
use Modules\System\Dashboard\PermissionLogin\Services\PermissionLoginService;
use Modules\System\Dashboard\PermissionLogin\Models\PermissionLoginModel;
use Str;
use Modules\Base\Library;
use Modules\System\Dashboard\UserLog\Models\UserLogModel;

class LoginController extends Controller
{
    public function __construct(
        PermissionLoginService $permissionLoginService,
        UserInfoService $userInfoService,
        UserService $userService
        )
    {
        $this->permissionLoginService = $permissionLoginService;
        $this->userInfoService = $userInfoService;
        $this->userService = $userService;
        // parent::__construct();
    }
    public function checkLogin(Request $request)
    {
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;
        if($email == '' || $email == null){
            $data['email'] = "Email không được để trống";
            return view('auth.signin',compact('data'));
        }
        if($password == '' || $password == null){
            $data['password'] = "Mật khẩu không được để trống";
            return view('auth.signin',compact('data'));
        }
        if(!isset($request->acp_checkbox)){
            $data['acp_checkbox'] = "Xác nhận đồng ý điều khoản FinTop!";
            return view('auth.signin',compact('data'));
        }
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = Auth::user();
            $getUsers = $this->userService->where('email',$email)->first();
            $getInfo = $this->userInfoService->where('user_id',$getUsers->id)->first();
            $_SESSION["role"] = $user->role;

            $_SESSION['role_admin'] = $user->role_admin;
            $_SESSION['role_manage'] = $user->role_manage;
            $_SESSION['role_cv_admin'] = $user->role_cv_admin;
            $_SESSION['role_cv_pro'] = $user->role_cv_pro;
            $_SESSION['role_cv_basic'] = $user->role_cv_basic;
            $_SESSION['role_sale_admin'] = $user->role_sale_admin;
            $_SESSION['role_Sale'] = $user->role_Sale;
            $_SESSION['role_Users'] = $user->role_Users;

            $_SESSION["id"]   = $getUsers->id;
            $_SESSION["email"]   = $email;
            $_SESSION["name"]   = $user->name;
            $_SESSION["account_type_vip"]   = $getUsers->account_type_vip;
            $_SESSION["color_view"] = !empty($getInfo->color_view)?$getInfo->color_view:2;
            // if(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP'])){
            //     $ip = $_SERVER['HTTP_CLIENT_IP'];
            // }elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //     $ip = $_SERVER['HTTP_CLIENT_IP'];
            // }else{
            //     $ip = $_SERVER['REMOTE_ADDR'];
            // }
            // $userLog = [
            //     'id' => (string)\Str::uuid(),
            //     'user_id' => $_SESSION["id"],
            //     'name' => $_SESSION["name"],
            //     'email' => $_SESSION["email"],
            //     'ip' => $ip,
            //     'created_at' => date('Y-m-d H:i:s'),
            // ];
            // UserLogModel::insert($userLog);
            // kiem tra quyen nguoi dung
            if ($user->role_admin == 'ADMIN' || $user->role_manage == 'MANAGE' || $user->role_cv_admin == 'CV_ADMIN'
             || $user->role_cv_pro == 'CV_PRO' || $user->role_cv_basic == 'CV_BASIC' || $user->role_sale_admin == 'SALE_ADMIN' || $user->role_Sale == 'SALE_BASIC') {
                // menu sidebar
                $sideBarConfig = config('SidebarSystem');
                $sideBar = $this->checkPermision($sideBarConfig , $user);
                $_SESSION["sidebar"] = $sideBar;
                Auth::login($user);
                return redirect('system/home/index');
            } else if ($user->role_Users == 'USERS' || $user->role_Users == 'USER') {
                $checkPrLogin = $this->permission_login($email);
                Auth::login($user);
                return redirect('client/datafinancial/index');
            }else{
                return redirect('/');
            }
        } else {
            $data['message'] = "Sai tên đăng nhập hoặc mật khẩu!";
            return view('auth.signin',compact('data'));
        }
    }
    // check đăng nhập lưu token đăng nhập 1 nơi
    public function permission_login($email){
        $check = PermissionLoginModel::where('email',$email)->first();
        $random = Library::_get_randon_number();
        $token = date("Y") . '_' . date("m") . '_' . date("d") . "_" . date("H") . date("i") . date("u") .$_SESSION["id"]. $random;
        $arr = [
            'email'=> $email,
            'user_id'=> $_SESSION["id"],
            'token'=> $token,
            'ip'=> '1',
            'created_at'=> date("Y/m/d H:i:s"),
            'updated_at'=> date("Y/m/d H:i:s"),
        ];
        if(isset($check->email)){
            PermissionLoginModel::where('email',$email)->update($arr);
        }else{
            $arr['id'] = (string)Str::uuid();
            PermissionLoginModel::create($arr);
        }
        $_SESSION["token"] = $token;
    }
    public function logout (Request $request)
    {
        // session_unset();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('auth.signin');
    }
    public function showLoginForm  (Request $request)
    {
        return view('auth.signin');
    }
    // check quyền hiển thị menu
    private function checkPermision($menu,$user){
        foreach ($menu as $key => $value) {
            if ($key == $user->role_admin) {
                $menu = $value;
                return  $menu;
            }
            if ($user->role_manage == 'MANAGE') {
                $menu = $value;
                unset($menu['approvepayment']);
                unset($menu['signal']);
                unset($menu['permision']);
                unset($menu['backupdata']);
                unset($menu['userlog']);
                return  $menu;
            }
            if ($user->role_cv_admin == 'CV_ADMIN') {
                $menu = $value;
                unset($menu['approvepayment']);
                unset($menu['permision']);
                unset($menu['backupdata']);
                unset($menu['userlog']);
                return  $menu;
            }
            if ($user->role_cv_pro == 'CV_PRO') {
                $menu = $value;
                unset($menu['users']);
                unset($menu['recommended']);
                unset($menu['handbook']);
                unset($menu['approvepayment']);
                unset($menu['signal']);
                unset($menu['permision']);
                unset($menu['backupdata']);
                unset($menu['userlog']);
                return  $menu;
            }
            if ($user->role_cv_basic == 'CV_BASIC') {
                $menu = $value;
                unset($menu['users']);
                unset($menu['recommended']);
                unset($menu['datafinancial']);
                unset($menu['signal']);
                unset($menu['handbook']);
                unset($menu['approvepayment']);
                unset($menu['signal']);
                unset($menu['permision']);
                unset($menu['backupdata']);
                unset($menu['userlog']);
                return  $menu;
            }
            if ($user->role_sale_admin == 'SALE_ADMIN') {
                $menu = $value;
                unset($menu['recommended']);
                unset($menu['datafinancial']);
                unset($menu['signal']);
                unset($menu['handbook']);
                unset($menu['approvepayment']);
                unset($menu['signal']);
                unset($menu['permision']);
                unset($menu['backupdata']);
                unset($menu['userlog']);
                unset($menu['category']);
                unset($menu['blog']);
                return  $menu;
            }
            if ($user->role_Sale == 'SALE_BASIC') {
                $menu = $value;
                unset($menu['users']);
                unset($menu['recommended']);
                unset($menu['datafinancial']);
                unset($menu['signal']);
                unset($menu['handbook']);
                unset($menu['approvepayment']);
                unset($menu['signal']);
                unset($menu['permision']);
                unset($menu['backupdata']);
                unset($menu['userlog']);
                unset($menu['category']);
                unset($menu['blog']);
                return  $menu;
            }
            
        }
   }
}
