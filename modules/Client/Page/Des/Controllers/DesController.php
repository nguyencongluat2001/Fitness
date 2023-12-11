<?php

namespace Modules\Client\Page\Des\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\System\Dashboard\Category\Services\CategoryService;
use Modules\System\Dashboard\Category\Services\CateService;
use Modules\System\Dashboard\Blog\Services\BlogService;
use Modules\System\Dashboard\Blog\Services\BlogDetailService;
use Modules\System\Dashboard\Blog\Services\BlogImagesService;

use DB;
use Response;

/**
 * cẩm nang
 *
 * @author Luatnc
 */
class DesController extends Controller
{

    public function __construct(
        BlogService $BlogService,
        BlogImagesService $BlogImagesService,
        BlogDetailService $BlogDetailService,
        CateService $CateService,
        CategoryService $CategoryService
    ){
        $this->BlogService = $BlogService;
        $this->BlogImagesService = $BlogImagesService;
        $this->BlogDetailService = $BlogDetailService;
        $this->CateService = $CateService;
        $this->CategoryService = $CategoryService;
    }

    /**
     * khởi tạo dữ liệu
     *
     * @return view
     */
    public function index(Request $request)
    {
        $categories = $this->CategoryService->where('cate','DM_BLOG')->where('instruct',1)->orderBy('order','ASC')->get();
        $arrCategory = [];
        foreach($categories as $key => $category){
            $arrCategory[$key] = $category->code_category;
        }
        // dd($arrCategory);
        $arrData = [];
        $readerFirst = '';
        $arrSelect = ['blogs.id', 'blogs.code_blog', 'blogs.code_category', 'blogs_details.title', 'blogs_image.name_image'];
        $query = $this->BlogService->select($arrSelect)
                ->leftJoin('blogs_details', 'blogs.code_blog', '=', 'blogs_details.code_blog')
                ->leftJoin('blogs_image', 'blogs.code_blog', '=', 'blogs_image.code_blog')
                ->whereIn('blogs.code_category', $arrCategory)
                ->where('status', 1)
                ->orderBy('blogs.created_at')
                ->get();
        // dd($query);
        if($readerFirst == ''){
            foreach($query as $v){
                if($readerFirst == ''){
                    $detail = $this->BlogDetailService->where('code_blog', $v->code_blog)->first();
                    $readerFirst = $detail->decision ?? '';
                }
            }
        }
        $data['datas'] =  $query;
        $data['readerFirst'] = $readerFirst;
        return view('client.des.home',$data);
    }
    public function reader(Request $request)
    {
        $id = $request->id;
        $data = $this->BlogService->select('blogs_details.decision')
                ->join('blogs_details', 'blogs_details.code_blog', '=', 'blogs.code_blog')
                ->where('blogs.id', $id)->first();
        $content = $data->decision ?? '';
        return response()->json(['content' => $content]);
    }
    
}
