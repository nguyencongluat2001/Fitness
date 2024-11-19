@extends('client.layouts.index')
@section('body-client')
@php
use Carbon\Carbon;
@endphp
<title>TÀI CHÍNH & ĐẦU TƯ FINTOP</title>
<style>
    header {
        font-family: 'Lobster', cursive;
        text-align: center;
        font-size: 25px;
    }

    #info {
        font-size: 18px;
        color: #555;
        text-align: center;
        margin-bottom: 25px;
    }

    a {
        color: #074E8C;
    }

    .scrollbar_blog {
        /* float: left; */
        max-height: 800px !important;
        /* width: 65px; */
        /* background: #F5F5F5; */
        overflow-y: scroll;
        margin-bottom: 25px;
    }

    .force-overflow {
        min-height: 400px;
    }

    #wrapper {
        text-align: center;
        width: 500px;
        margin: auto;
    }

    /*
    *  STYLE 2
    */

    #style-2::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }

    #style-2::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    #style-2::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #D62929;
    }

    .tv-lightweight-charts {
        width: 100%;
        padding-right: var(--bs-gutter-x, 0.5rem) !important;
        padding-left: var(--bs-gutter-x, 0.5rem) !important;
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .card {
        background: #ffffff26 !important;
    }

    /* .blogReader {
        width: 100%;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    } */
    .blogReader {
        max-height: 100px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;
    }

    /* {
    box-sizing: border-box;
    } */

    #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    #myTable {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
        font-size: 18px;
    }

    #myTable th,
    #myTable td {
        text-align: left;
        padding: 12px;
    }

    #myTable tr {
        border-bottom: 1px solid #ddd;
    }

    #myTable tr.header,
    #myTable tr:hover {
        background-color: #f1f1f1;
    }

    @media (max-width: 450px) {
        #myTable img {
            width: 150px !important;
            height: 100px !important;
        }

        #myTable .title {
            max-height: 100px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
        }
    }
</style>

<!-- top cổ phiếu biến động -->
<section class="container">
    <div class="table-responsive">
        <!-- Màn hình danh sách top chỉ số tài chính-->
        <div id="table-container-loadListTop"></div>
    </div>
</section>
<!-- Start Banner Hero -->
<div class="banner-wrapper">
    <!-- Màn hình danh sách top chỉ số tài chính
    <div class="table-responsive">
        <div id="table-container-loadListTop"></div>
    </div> -->
    <!-- top cổ phiếu biến động -->
    <section class="container">
        <div class="table-responsive">
            <div id="table-container-loadListTop"></div>
        </div>
    </section>
    <!-- tra cứu cổ phiếu -->
    <section class="container" style="background:#b56c6cb5">
        <div>
            <div class="pt-3 pb-3 d-lg-flex gx-5">
                <div class="col-md-12 row">
                    <form action="" method="POST" id="frmLoadlist_list">
                        <div class="home_index_vnindex">
                            <h2 class="h4 py-2"> <span style="padding-left:5%"></span> </h2>
                            <!-- biểu đồ FireAnt -->
                            <div class="home_index_child " style="background:#ffffffe6 !important;margin: 10px;">
                                <div class="col-lg-12" style="width: 100%;">
                                    <!-- <h1 class="h5 "> BIỂU ĐỒ <i class="far fa-chart-bar"></i></h1> -->
                                    <iframe style="width:100%" height="770" src="https://fireant.vn/top-symbols"
                                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                    <p>Nguồn theo: Fireant</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="pt-3 pb-3 d-lg-flex gx-5">
                <div class="col-md-8">
                    <div class="col-md-12 mb-3 row">
                        <span><b>V.I.P ĐẦU TƯ (BCPT VIP)</b></span>
                    </div>
                    <div id="style-1" class="homeTTTH row vip">
                        @if(isset($TTTH))
                        @foreach ($TTTH as $key => $data)
                        @php Carbon::setLocale('vi');$now = Carbon::now(); $created_at = Carbon::create($data->created_at) @endphp
                        <div class="col-md-4 about-list mb-3" onclick="JS_About.blogReader('{{$data->id}}')">
                            <div class="about-img">
                                @if((isset($data['type_blog']) && $data['type_blog'] == 'VIP'))
                                <h1 style="position: absolute;right:0">
                                    <img src="{{url('/clients/img/vip.png')}}" alt="Image" style="height: 60px;width: 32px;object-fit: cover;">
                                </h1>
                                @endif
                                <img class="card-img-top" src="{{url('/file-image-client/blogs/')}}/{{ !empty($data->imageBlog[0]->name_image)?$data->imageBlog[0]->name_image:'' }}" style="height: 200px;width: 100%;object-fit: cover;" alt="...">
                            </div>
                            <div class="about-content">
                                <div><i>{{ $data->users->name ?? '' }} | {{$created_at->diffForHumans($now)}}</i></div>
                                <h5 class="card-title light-600 text-dark">{{ $data->detailBlog->title }}</h5>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12 mb-3">
                        <span style="padding-left: 15px;"><b>THỊ TRƯỜNG TỔNG HỢP</b></span>
                    </div>
                    <div id="style-1" class="homeTTTH" style="padding-left:15px;max-height:900px !important">
                        <ul class="list-group">
                            @if(isset($TTTH))
                            @foreach ($TTTH as $key => $data)
                            @php
                            Carbon::setLocale('vi');$now = Carbon::now();
                            $created_at = Carbon::create($data->created_at);
                            @endphp
                            <div class="col-sm-6 col-lg-12  ttth text-decoration-none {{ $data->code_category }}">
                                <div class="pb-3 d-lg-flex gx-5">
                                    <!-- display: flex;align-items: center;justify-content: center; -->
                                    <div class="col-lg-3 " style="align-items: right;justify-content: right;position: relative;">
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
                            <hr style="margin: 0;" class="mb-3">
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pt-3 pb-3 d-lg-flex gx-5">
                <div class="col-md-8">
                    <div class="col-md-12 mb-3 row">
                        <span><b>NGÀNH ĐẦU TƯ (BCPT NGÀNH)</b></span>
                    </div>
                    <div id="style-1" class="homeTTTH row vip">
                        @if(isset($BCPTN))
                        @foreach ($BCPTN as $key => $data)
                        @php Carbon::setLocale('vi');$now = Carbon::now(); $created_at = Carbon::create($data->created_at) @endphp
                        <div class="col-md-4 about-list mb-3" onclick="JS_About.blogReader('{{$data->id}}')">
                            <div class="about-img">
                                @if((isset($data['type_blog']) && $data['type_blog'] == 'VIP'))
                                <h1 style="position: absolute;right:0">
                                    <img src="{{url('/clients/img/vip.png')}}" alt="Image" style="height: 60px;width: 32px;object-fit: cover;">
                                </h1>
                                @endif
                                <img class="card-img-top" src="{{url('/file-image-client/blogs/')}}/{{ !empty($data->imageBlog[0]->name_image)?$data->imageBlog[0]->name_image:'' }}" style="height: 200px;width: 100%;object-fit: cover;" alt="...">
                            </div>
                            <div class="about-content">
                                <div><i>{{ $data->users->name ?? '' }} | {{$created_at->diffForHumans($now)}}</i></div>
                                <h5 class="card-title light-600 text-dark">{{ $data->detailBlog->title }}</h5>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12 mb-3">
                        <span style="padding-left: 15px;"><b>BCPT CỔ PHIẾU DOANH NGHIỆP</b></span>
                    </div>
                    <div id="style-1" class="homeTTTH" style="padding-left:15px;max-height:900px !important">
                        <ul class="list-group">
                            @if(isset($BCPTDN))
                            @foreach ($BCPTDN as $key => $data)
                            @php
                            Carbon::setLocale('vi');$now = Carbon::now();
                            $created_at = Carbon::create($data->created_at);
                            @endphp
                            <div class="col-sm-6 col-lg-12  ttth text-decoration-none {{ $data->code_category }}">
                                <div class="pb-3 d-lg-flex gx-5">
                                    <!-- display: flex;align-items: center;justify-content: center; -->
                                    <div class="col-lg-3 " style="align-items: right;justify-content: right;position: relative;">
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
                            <hr style="margin: 0;" class="mb-3">
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div style="clear:both"></div>
<div class="modal" id="reader" role="dialog"></div>
<!-- End Recent Work -->
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_About.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Home.js') }}"></script>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    var JS_About = new JS_About(baseUrl, 'client', 'about', 'home');
    var JS_Home = new JS_Home(baseUrl, 'client', 'home');
    $(document).ready(function($) {
        JS_Home.loadIndex(baseUrl);
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>


<!-- <script type="text/javascript" src="{{ URL::asset('dist\js\backend\pages\JS_System_Security.js') }}"></script>
<script>
      var JS_System_Security = new JS_System_Security();
          $(document).ready(function($) {
                 JS_System_Security.security();
      })
</script> -->

@endsection