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
        <div id="style-1" class="scrollbar tkp_web" style="padding-right:10px;max-height:900px !important">
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
        <div class="paginate tkp_web">
            @if(count($datas) > 0)
            {{$datas->links('pagination.blog')}}
            @endif
        </div>
        <div id="content-mobile" class="tkp_mobile row" style="max-height:900px !important">
            @foreach ($datas as $key => $data)
            @php
            Carbon::setLocale('vi');$now = Carbon::now();
            $created_at = Carbon::create($data->created_at);
            @endphp
            <div class="col-md-4 about-list mb-3">
                <div class="about-img">
                    <a href="{{url('/client/about/reader/') . '/' . $data->id}}">
                        @if((isset($data['type_blog']) && $data['type_blog'] == 'VIP'))
                        <h1 style="position: absolute;right:0">
                            <img src="{{url('/clients/img/vip.png')}}" alt="Image" style="height: 60px;width: 32px;object-fit: cover;">
                        </h1>
                        @endif
                        <img class="card-img-top" src="{{url('/file-image-client/blogs/')}}/{{ !empty($data->imageBlog[0]->name_image)?$data->imageBlog[0]->name_image:'' }}" style="height: 200px;width: 100%;object-fit: cover;" alt="...">
                    </a>
                </div>
                <div class="about-content">
                    <div><i>{{ $data->users->name ?? '' }} | {{$created_at->diffForHumans($now)}}</i></div>
                    <a href="{{url('/client/about/reader/') . '/' . $data->id}}">
                        <h5 class="card-title light-600 text-dark">{{ $data->detailBlog->title }}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="paginate tkp_mobile">
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
        let countDiv = document.querySelectorAll('div#content-mobile .about-list').length;
        let countPerpage = "{{ $datas->total() }}";
        let baseUrl = "{{ url('') }}";

        // Mô phỏng dữ liệu tải thêm
        let itemCount = 5;
        const loadMore = () => {
            var url = baseUrl + '/client/about/loadMore';
            var data = 'offset=' + Math.ceil((countDiv/5) + 1);
            data += '&limit=' + itemCount;
            data += '&category=BAO_CAO_TKP';
            $.ajax({
                url: url,
                type: "GET",
                data: data,
                success: function (arrResult) {
                    for (let i = 0; i < arrResult.length; i++) {
                        let html = formHtmls(arrResult[i]);
                        content.innerHTML += html;
                    }
                    countDiv = document.querySelectorAll('div#content-mobile .about-list').length;
                    $(".pagination-count").html(countDiv);
                }
            });
        };

        // Hiển thị nút khi cuộn đến cuối
        content.addEventListener('scroll', () => {
            if (content.scrollWidth - content.scrollLeft <= content.clientWidth && countDiv < countPerpage) {
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
            htmls += '<div class="col-md-4 about-list mb-3">';
            htmls += '<div class="about-img">';
            htmls += '<a href="' + baseUrl + '/client/about/reader/'+data.id+'">';
            htmls += '<img class="card-img-top" src="'+data.link+'" style="height: 200px;width: 100%;object-fit: cover;" alt="...">';
            htmls += '</a>';
            htmls += '</div>';
            htmls += '<div class="about-content">';
            htmls += '<div><i>'+data.user_name+' | '+data.created_at+'</i></div>';
            htmls += '<a href="' + baseUrl + '/client/about/reader/'+data.id+'">';
            htmls += '<h5 class="card-title light-600 text-dark">'+data.title+'</h5>';
            htmls += '</a>';
            htmls += '</div>';
            htmls += '</div>';
            return htmls;
        }
    })
</script>



