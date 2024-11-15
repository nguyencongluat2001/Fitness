@php
use Carbon\Carbon;
@endphp
<title>TÀI CHÍNH & ĐẦU TƯ FINTOP</title>
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
    <div class="card-body" style="padding: 10px !important;">
        <div id="style-1" class="scrollbar" style="padding-right:10px;max-height:900px !important">
            <ul class="list-group">
                @foreach ($datas as $key => $data)
                @php
                Carbon::setLocale('vi');$now = Carbon::now();
                $created_at = Carbon::create($data->created_at);
                @endphp
                <div class="col-sm-6 col-lg-12 text-decoration-none {{ $data->code_category }}">
                    <div class="pb-3 d-lg-flex gx-5">
                        <!-- display: flex;align-items: center;justify-content: center; -->
                        <div class="col-lg-3 " style="align-items: right;justify-content: right;position: relative;">
                            <a href="{{url('/client/about/reader/') . '/' . $data->id}}">
                                @if((isset($data['type_blog']) && $data['type_blog'] == 'VIP'))
                                <h1 style="position: absolute;right:0">
                                    <img src="{{url('/clients/img/vip.png')}}" alt="Image" style="height: 60px;width: 50px;object-fit: cover;">
                                </h1>
                                @endif
                                <img class="card-img-top" src="{{url('/file-image-client/blogs/')}}/{{ !empty($data->imageBlog[0]->name_image)?$data->imageBlog[0]->name_image:'' }}" style="height: 170px;width: 100%;object-fit: cover;" alt="...">
                            </a>
                        </div>
                        <div style="width:20px"></div>
                        <div class="col-lg-7">
                            <!-- <div class="card-body"> -->
                            <a href="{{url('/client/about/reader/') . '/' . $data->id}}">
                                <h5 class="card-title light-600 text-dark">{{ $data->detailBlog->title }}</h5>
                            </a>
                            <i>{{$created_at->diffForHumans($now)}} ({{!empty($created_at) ? date('H:i', strtotime($created_at)) : ''}}  {{!empty($created_at) ? date('d/m/Y', strtotime($created_at)) : ''}})</i>
                            <p class="light-300">
                            <div class="blogReader">{!! $data->detailBlog->decision !!}</div>
                            </p>
                            <a href="{{url('/client/about/reader/') . '/' . $data->id}}">
                                <span class="text-decoration-none light-300 btn rounded-pill" style="background: #32870b;color: #ffffff;">
                                    Xem chi tiết
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <hr style="margin: 0;">
                @endforeach
            </ul>
        </div>
        <div class="paginate">
            @if(count($datas) > 0)
            {{$datas->links('pagination.baocaoTTTH')}}
            @endif
        </div>
    </div>
</div>