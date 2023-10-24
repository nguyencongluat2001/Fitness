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
        $CategoryService = $this->CategoryService->where('cate','DM_BLOG')->where('instruct',1)->get();
        // dd($CategoryService);
        $arr = [];
        foreach($CategoryService as $val){
            $BlogService = $this->BlogService->where('code_category',$val['code_category'])->get()->toArray();
            foreach($BlogService as $valeE){
                $BlogDetailService = $this->BlogDetailService->where('code_blog',$valeE['code_blog'])->first();
                $BlogImagesService = $this->BlogImagesService->where('code_blog',$valeE['code_blog'])->first();

                $chile[] = [
                    "id" => $valeE['id'],
                    "code_blog" => $valeE['code_blog'],
                    "code_category" => $valeE['code_category'],
                    "code_blog" => $BlogDetailService['code_blog'],
                    "title" => $BlogDetailService['title'],
                    "image" => $BlogImagesService['image'],
                ];
            }
            $arr[] = [
                "id" => $val['id'],
                "name_category" => $val['name_category'],
                "code_category" => $val['code_category'],
                "listItem" => $chile,
            ];
        }
        $data['datas'] =  $arr;
        return view('client.des.home',$data);
    }
    
}
