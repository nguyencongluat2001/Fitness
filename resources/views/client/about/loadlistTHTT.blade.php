@php
use Carbon\Carbon;
@endphp
<div class="card h-100">
    <div class="card-header pb-0 px-3">
        <div class="row">
            <div class="col-md-6">
                <h6 class="mb-0">Bài viết </h6>
            </div>
            {{--
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <i class="far fa-calendar-alt me-2"></i>
                <small>Chủ nhật , 07-05-2023</small>
            </div>
            --}}
        </div>
    </div>
    <div class="card-body">
        <div id="style-1" class="scrollbar" style="padding-right:10px;max-height:900px !important">
            <ul class="list-group">
                @foreach ($datas as $key => $data)
                @php Carbon::setLocale('vi');$now = Carbon::now(); $created_at = Carbon::create($data->created_at) @endphp
                <div onclick="JS_About.blogReader('{{$data->id}}')" class="col-sm-6 col-lg-12 text-decoration-none {{ $data->code_category }}" style="cursor:pointer">
                    <div class="pb-3 d-lg-flex gx-5">
                        <div class="col-lg-4 " style="display: flex;align-items: center;justify-content: center;">
                        @if((isset($data['type_blog']) && $data['type_blog'] == 'VIP'))
                        <h1 style="position: absolute;">
                            <img  src="{{url('/clients/img/vip.png')}}" alt="Image" style="">
                        </h1>
                        @endif
                            <img class="card-img-top" src="{{url('/file-image-client/blogs/')}}/{{ !empty($data->imageBlog[0]->name_image)?$data->imageBlog[0]->name_image:'' }}" style="height: 150px;width: 250px;object-fit: cover;display: flex;align-items: center;justify-content: center;" alt="...">
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body">
                                <h5 class="card-title light-600 text-dark">{{ $data->detailBlog->title }}</h5>
                                <i>{{$created_at->diffForHumans($now)}}</i>
                                <p class="light-300">
                                <div class="blogReader">{!! $data->detailBlog->decision !!}</div>
                                </p>
                                <span class="text-decoration-none light-300" onclick="JS_About.reader('$data->id')">
                                    Đọc thêm <i class='bx bxs-hand-right ms-1'></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="margin: 0;">
                @endforeach
            </ul>
        </div>
        <div class="paginate">
            @if(count($datas) > 0)
            {{$datas->links('pagination.blog')}}
            @endif
        </div>
    </div>
</div>
</div>