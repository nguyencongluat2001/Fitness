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
        padding: 12px 20px 12px 40px;
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
                <div class="col-lg-4">
                    <form action="" method="POST" id="frmLoadlist_list">
                        <div class="home_index_vnindex">
                            <h2 class="h4 py-2"> <span style="padding-left:5%"></span> </h2>
                            <!-- <div class="home_index_child py-2">
                                <div class="col-md-6">
                                    <select class="form-control input-sm chzn-select" name="type_code" id="type_code">
                                        <option value="VNINDEX">VNINDEX</option>
                                        <option value="HNX30">HNX30</option>
                                        <option value="HNXINDEX">HNXINDEX</option>
                                        <option value="UPINDEX">UPINDEX</option>
                                        <option value="VN30">VN30</option>
                                        <option value="VN100">VN100</option>
                                    </select>
                                </div>
                                <div class="col-md-6" style="padding-left:10px">
                                    <select class="form-control input-sm chzn-select" name="limit" id="limit">
                                        <option value="10">Hiển thị 10</option>
                                        <option value="30">Hiển thị 30</option>
                                        <option value="50">Hiển thị 50</option>
                                    </select>
                                </div>
                            </div>
                            <div class="home_index_child" style="display:none">
                                <div class="col-md-5">
                                    <input class="form-control input-sm" type="date" id="fromDate" name="fromDate" value="<?php echo date('Y-m-d', mktime(0, 0, 0, date("m") - 1, date("d"), date("Y"))) ?>" min="2010-01-01" max="2030-12-31">
                                </div>
                                <i style="padding:10px 20px 0px 20px" class="fas fa-long-arrow-alt-right"></i>
                                <div class="col-md-5">
                                    <input class="form-control input-sm" type="date" id="toDate" name="toDate" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01" max="2030-12-31">
                                </div>
                            </div>
                            <div class="home_index_child" style="display:none">
                                <button id="txt_search" name="txt_search" style="background:#2e4970;color:white" type="button" class="btn"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="table-responsive">
                                <div id="table-container"></div>

                            </div> -->
                             <!-- biểu đồ FireAnt -->
                            <div class="home_index_child " style="background:#ffffffe6 !important;margin: 10px;!important">
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
                    <!-- <div class="card mb-4 pt-3">
                        <form action="" method="POST" id="frmLoadlist_Bank">
                            <div class="home_index_vnindex">
                                <h2 class="h4 py-2 "><span style="padding-left:5%">Chứng khoán ngân hàng</span> </h2>
                                <div class="home_index_child py-2">
                                    <div class="col-md-6">
                                        <select class="form-control input-sm chzn-select" name="type_code" id="type_code">
                                            @foreach($codeBank as $key => $value)
                                            <option value="{{$key}}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="home_index_child" style="display:none">
                                    <div class="col-md-5">
                                        <input class="form-control input-sm" type="date" id="fromDate" name="fromDate" value="<?php echo date('Y-m-d', mktime(0, 0, 0, date("m") - 1, date("d"), date("Y"))) ?>" min="2010-01-01" max="2030-12-31">
                                    </div>
                                    <i style="padding:10px 20px 0px 20px" class="fas fa-long-arrow-alt-right"></i>
                                    <div class="col-md-5">
                                        <input class="form-control input-sm" type="date" id="toDate" name="toDate" value="<?php echo (new DateTime())->format('Y-m-d'); ?>" min="2010-01-01" max="2030-12-31">
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div id="table-container-bank"></div>
                                </div>
                            </div>
                        </form>
                    </div> -->
                </div>
                <div class="col-lg-8" style="padding-left:10px">
                    <!-- Start Our Work -->
                    <form action="" method="POST" id="frmLoadlist_blog" style="background:#ffffffe3;border-radius: 0.25em;">

                        <div class="col-lg-6 mx-auto " style="display:flex">
                            <div class="input-group pt-2 box">
                                <input id="myInput" onkeyup="myFunction()" style="background:#f8fdffbd" type="text" class="input form-control form-control-lg rounded-pill rounded" placeholder="Tìm kiếm bài viết theo từ khóa, danh mục,...">
                            </div>
                        </div>
                        <div class="scrollbar_blog carousel-item active list-hispital-home">
                            <div class=" row d-flex ">
                                <div class="banner-content col-lg-12 col-12 m-lg-auto text-left ">
                                    <!-- Start Our Work -->
                                    <!-- <div class="col-lg-12" style="padding:10px;width: 100%;">
                                        <iframe style="width:100%" height="320" src="https://fireant.vn/dashboard" 
                                            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                            allowfullscreen>
                                        </iframe>
                                        <p>Nguồn theo: Fireant</p>
                                    </div> -->
                                    <section class="">
                                        <table id="myTable" class="table  table-bordered table-striped table-condensed dataTable no-footer">
                                            <tbody>
                                                @foreach ($blog as $key => $data)
                                                @php Carbon::setLocale('vi');$now = Carbon::now(); $created_at = Carbon::create($data->created_at) @endphp
                                                <tr>
                                                    <td style="background: #ffffffeb;width:30%;" align="center">
                                                        @if((isset($data['type_blog']) && $data['type_blog'] == 'VIP'))
                                                        <h1 style="position: absolute;">
                                                            <img src="{{url('/clients/img/vip.png')}}" alt="Image" style="height: 50px;width: 32px;object-fit: cover;">
                                                        </h1>
                                                        @endif
                                                        <img src="{{url('/file-image-client/blogs/')}}/{{ !empty($data->imageBlog[0]->name_image)?$data->imageBlog[0]->name_image:'' }}" alt="Image" style="height: 200px;width: 250px;object-fit: cover;">
                                                    </td>
                                                    <td style="background: #ffffffeb;width:70%;vertical-align: middle;">
                                                        <!-- <span class="title" style="font-size: 20px;font-family: -webkit-body;color: #1d3952;"> -->
                                                            <a href="{{url('client/about/reader') . '/' . $data->id}}">
                                                                <h5 class="card-title light-600 text-dark">{{ $data->detailBlog->title }}</h5>
                                                            </a>
                                                        <!-- </span> <br> -->
                                                        <p style="color: #d25d00;font-size: 13px;">{{(isset($data['cate_name']) ? $data['cate_name'] . ' - ' : '') . $created_at->diffForHumans($now)}}</p>
                                                        <span class="blogReader" style="font-size: 15px;font-family: -webkit-body;color: #1d3952;">
                                                            {!! $data->detailBlog->decision !!}
                                                        </span><br>
                                                        <a href="{{url('client/about/reader') . '/' . $data->id}}">
                                                            <span style="background: #32870b;color: #ffffff;" class="btn btn-outline-light rounded-pill">Xem chi tiết</span>
                                                        </a>
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </section>
                                    <!-- End Our Work -->
                                </div>
                            </div>
                        </div>
                </div>
                </form>

                <!-- End Our Work -->
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