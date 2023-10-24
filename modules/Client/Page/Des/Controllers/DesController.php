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
        $categories = $this->CategoryService->where('cate','DM_BLOG')->where('instruct',1)->orderBy('order','asc')->get();
        $arrData = [];
        foreach($categories as $key => $category){
            $arrSelect = ['blogs.id', 'blogs.code_blog', 'blogs.code_category', 'blogs_details.title', 'blogs_image.name_image'];
            $data = $this->BlogService->select($arrSelect)
                    ->join('blogs_details', 'blogs.code_blog', '=', 'blogs_details.code_blog')
                    ->join('blogs_image', 'blogs.code_blog', '=', 'blogs_image.code_blog')
                    ->where('blogs.code_category', $category->code_category)
                    ->orderBy('blogs.created_at')
                    ->get();
            $arrData[$key] = [
                'id' => $category->id,
                'name_category' => $category->name_category,
                'code_category' => $category->code_category,
                'listItem' => $data->toArray(),
            ];
        }
        $data['datas'] =  $arrData;
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
