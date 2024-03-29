<?php

namespace Modules\Client\Page\Home\Controllers;

use App\Http\Controllers\Controller;
use Modules\Base\Library;
use Illuminate\Http\Request;
use Modules\Client\Page\Home\Services\HomeService;
use Modules\System\Dashboard\Blog\Services\BlogService;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Category\Services\CateService;
use Illuminate\Support\Facades\Http;
use DB;

/**
 * Phân quyền người dùng 
 *
 * @author Luatnc
 */
class HomeController extends Controller
{

    public function __construct(
        CateService $cateService,
        CategoryService $categoryService,
        HomeService $homeService,
        BlogService $blogService
    ){
        $this->cateService = $cateService;
        $this->categoryService = $categoryService;
        $this->blogService = $blogService;
        $this->homeService = $homeService;
    }

    /**
     * khởi tạo dữ liệu, Load các file js, css của đối tượng
     *
     * @return view
     */
    public function index(Request $request)
    {
        $datas['codeBank'] = config('codeBank.BANK');
        $cate = $this->cateService->where('code_cate','DM_BLOG')->first();
        if(!empty($cate)){
            $category = $this->categoryService->select('code_category','name_category')->where('cate',$cate->code_cate)->get()->toArray();
        }
        $datas['category'] = isset($category) ? $category : [];
        $data = array();
        $objResult = $this->blogService->where('status',1)->orderBy('created_at', 'DESC')->get()->take(15);
        foreach($objResult as $key => $value){
            $category = $this->categoryService->where('code_category', $value->code_category)->first();
            if(!empty($category)){
                $objResult[$key]->cate_name = $category->name_category;
            }
        }
        $datas['blog'] = $objResult;
        return view('client.home.home',$datas);
    }
    
     /**
     * load màn hình biểu đồ nến
     *
     * @param Request $request
     *
     * @return json $return
     */
    public function loadListChartNen(Request $request)
    { 
        $arrInput = $request->input();
        $data = $this->homeService->loadListChartNen($arrInput);
        return view("client.chart.index", $data);
    }
     /**
     * load màn hình danh sách lấy chỉ số thị trường
     *
     * @param Request $request
     *
     * @return json $return
     */
    public function loadList(Request $request)
    { 
        $arrInput = $request->input();
        $arrInput['sortType'] = 1;
        $data = $this->homeService->loadList($arrInput);
        return view("client.home.loadlist", $data);
    }
     /**
     * load màn hình danh sách lấy top chỉ số thị trường
     *
     * @param Request $request
     *
     * @return json $return
     */
    public function loadListTop(Request $request)
    { 
        $arrInput = $request->input();
        $data = $this->homeService->loadListTop($arrInput);
        return view("client.home.loadlistTop", $data);
    }
    /**
     * load màn hình danh sách
     *
     * @param Request $request
     *
     * @return json $return
     */
    public function loadListTap1(Request $request)
    { 
        $arrInput = $request->input();
        $data = $this->homeService->loadList($arrInput);
        return view("client.home.loadlist-tap1", $data);
    }
}
