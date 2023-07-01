<?php

namespace Modules\System\Dashboard\UserLog\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\System\Dashboard\UserLog\Services\UserLogService;

class UserLogController extends Controller
{
    private $userLogService;

    public function __construct(
        UserLogService $userLogService
    ){
        $this->userLogService = $userLogService;
    }
    public function index()
    {
        return view('dashboard.userLog.index');
    }
    public function loadList(Request $request)
    {
        $input = $request->all();
        $data['datas'] = $this->userLogService->filter($input);
        return view('dashboard.userLog.loadList', $data)->render();
    }
}
