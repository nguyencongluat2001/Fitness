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
        <!-- Web -->
        <div id="style-1" class="scrollbar ptn_web" style="padding-right:10px;max-height:900px !important">
            <ul class="list-group">
                @foreach ($datas as $key => $data)
                @php Carbon::setLocale('vi');$now = Carbon::now(); $created_at = Carbon::create($data->created_at) @endphp
                <div onclick="JS_About.blogReader('{{$data->id}}')" class="col-sm-6 col-lg-12 text-decoration-none {{ $data->code_category }}" style="cursor:pointer">
                    <div class="pb-3 d-lg-flex gx-5">
                    <!-- display: flex;align-items: center;justify-content: center; -->
                        <div class="col-lg-3 " style="align-items: right;justify-content: right;position: relative;">
                        @if((isset($data['type_blog']) && $data['type_blog'] == 'VIP'))
                        <h1 style="position: absolute;right:0">
                           
                            <img  src="{{url('/clients/img/vip.png')}}" alt="Image" style="height: 60px;width: 32px;object-fit: cover;">
                        </h1>
                        @endif
                            <img class="card-img-top" src="{{url('/file-image-client/blogs/')}}/{{ !empty($data->imageBlog[0]->name_image)?$data->imageBlog[0]->name_image:'' }}" style="height: 170px;width: 100%;object-fit: cover;" alt="...">
                        </div>
                        <div style="width:20px">
                        </div>
                        <div class="col-lg-7">
                            <!-- <div class="card-body"> -->
                                <h5 class="card-title light-600 text-dark">{{ $data->detailBlog->title }}</h5>
                                <i>{{$created_at->diffForHumans($now)}} ({{!empty($created_at) ? date('H:i', strtotime($created_at)) : ''}}  {{!empty($created_at) ? date('d/m/Y', strtotime($created_at)) : ''}})</i>
                                <p class="light-300">
                                <div class="blogReader">{!! $data->detailBlog->decision !!}</div>
                                </p>
                                <span class="text-decoration-none light-300 btn rounded-pill" style="background: #32870b;color: #ffffff;" onclick="JS_About.reader('$data->id')">
                                    Xem chi tiết
                                </span>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <hr style="margin: 0;">
                @endforeach
            </ul>
        </div>
        <div class="paginate ptn_web">
            @if(count($datas) > 0)
            {{$datas->links('pagination.blog')}}
            @endif
        </div>
        
        <!-- Mobile -->
        <div id="content-mobile" class="ptn_mobile" style="padding-right:10px;max-height:515px !important;overflow-y:scroll;margin-top: .75rem;">
            @if(isset($datas))
            @foreach ($datas as $key => $data)
            @php
            Carbon::setLocale('vi');$now = Carbon::now();
            $created_at = Carbon::create($data->created_at);
            @endphp
            <div class="col-sm-6 col-lg-12 ptn text-decoration-none {{ $data->code_category }}">
                <div class="d-lg-flex gx-5 ptn-content">
                    <!-- display: flex;align-items: center;justify-content: center; -->
                    <div class="col-lg-3 about-img" style="align-items: right;justify-content: right;position: relative;">
                        <a href="{{url('/client/about/reader/') . '/' . $data->id}}">
                            @if((isset($data['type_blog']) && $data['type_blog'] == 'VIP'))
                            <h1 style="position: absolute;right:0">
                                <img src="{{url('/clients/img/vip.png')}}" alt="Image" style="height: 60px;width: 50px;object-fit: cover;">
                            </h1>
                            @endif
                            <img class="card-img-top" src="{{url('/file-image-client/blogs/')}}/{{ !empty($data->imageBlog[0]->name_image)?$data->imageBlog[0]->name_image:'' }}" style="height: 70px;width: 100%;object-fit: cover;" alt="...">
                        </a>
                    </div>
                    <div class="col-lg-7 about-content">
                        <i>{{$created_at->diffForHumans($now)}}</i>
                        <a href="{{url('/client/about/reader/') . '/' . $data->id}}">
                            <h6 class="card-title light-600 text-dark">{{ $data->detailBlog->title }}</h6>
                        </a>
                    </div>
                </div>
            </div>
            <hr style="margin: 0;" class="my-3">
            @endforeach
            @endif
        </div>
        <div class="paginate ptn_mobile">
            @if(count($datas) > 0)
            {{$datas->links('client.about.pagination')}}
            @endif
        </div>
    </div>
</div>
</div>


<script>
    jQuery(document).ready(function() {
        let content = document.getElementById('content-mobile');
        let loadMoreButton = document.getElementById('loadMore-mobile');
        let countDiv = document.querySelectorAll('div#content-mobile .ptn').length;
        let countPerpage = "{{ $datas->total() }}";
        let baseUrl = "{{ url('') }}";

        if (content.scrollHeight - content.scrollTop <= (content.clientHeight + countDiv*5)){
            loadMoreButton.style.display = 'block';
        }

        // Mô phỏng dữ liệu tải thêm
        let itemCount = 5;
        const loadMore = () => {
            var url = baseUrl + '/client/about/loadMore';
            var data = 'offset=' + Math.ceil((countDiv/5) + 1);
            data += '&limit=' + itemCount;
            data += '&category=BAO_CAO_PTN';
            $.ajax({
                url: url,
                type: "GET",
                data: data,
                success: function (arrResult) {
                    for (let i = 0; i < arrResult.length; i++) {
                        let html = formHtmls(arrResult[i]);
                        content.innerHTML += html;
                    }
                    countDiv = document.querySelectorAll('div#content-mobile .ptn').length;
                    $(".pagination-count").html(countDiv);
                }
            });
        };

        // Hiển thị nút khi cuộn đến cuối
        content.addEventListener('scroll', () => {
            if (content.scrollHeight - content.scrollTop <= (content.clientHeight + countDiv*5) && countDiv < countPerpage) {
                loadMoreButton.style.display = 'block';
            }
        });

        // Gọi hàm khi nhấn nút "Xem thêm"
        loadMoreButton.addEventListener('click', () => {
            loadMore();
            loadMoreButton.style.display = 'none';
        });

        function formHtmls(data) {
            let htmls = '';
            htmls += '<div class="col-sm-6 col-lg-12  ptn text-decoration-none BAO_CAO_PTN">';
            htmls += '<div class="ptn-content d-lg-flex gx-5">';
            htmls += '<div class="col-lg-3 about-img" style="align-items: right;justify-content: right;position: relative;">';
            htmls += '<a href="' + baseUrl + '/client/about/reader/'+data.id+'">';
            htmls += '<img class="card-img-top" src="'+data.link+'" style="height: 70px;width: 100%;object-fit: cover;" alt="...">';
            htmls += '</a></div>';
            htmls += '<div class="col-lg-7 about-content">';
            htmls += '<i>'+data.created_at+'</i>';
            htmls += '<a href="' + baseUrl + '/client/about/reader/'+data.id+'">';
            htmls += '<h6 class="card-title light-600 text-dark">'+data.title+'</h6>';
            htmls += '</a></div></div></div>';
            htmls += '<hr style="margin: 0;" class="my-3">';
            return htmls;
        }
    })
</script>

