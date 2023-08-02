@php
use Carbon\Carbon;
@endphp
@extends('client.layouts.index')
@section('body-client')
<div class="banner-wrapper">
    <!-- tra cứu cổ phiếu -->
    <!-- <section class="container" style="background:#ffffff8a">
        <div class="pt-3 pb-3 d-lg-flex gx-5">
            <div class="col-lg-12" style="background: #fff">
                <div class="card">
                    <div class="card-header" style="background: #ffc827;">
                        <h1>{{ $datas['blogDetail']->title }}</h1>
                    </div>
                    <div class="card-body">
                        <div style="width: 100%;">
                            {!! $datas['blogDetail']->decision !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Start Banner Hero -->
    @php Carbon::setLocale('vi');$now = Carbon::now(); $created_at = Carbon::create($datas['blogDetail']->created_at) @endphp

    <div class="container banner-wrapper" style="background: white;">
        <div id="index_banner_detail" class="banner-vertical-center-index">
            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner active" >
                    <!-- End Contact -->
                    <div class="carousel-item active list-hispital-home" >
                        <div class=" row d-flex align-items-center">
                            <div class="banner-content col-lg-12 col-8 m-lg-auto text-left ">
                                <div class="row g-lg-5 mb-4">
                                    <div class="banner-wrapper w-100" style="background: #ffffff;">
                                        <div class="card-header pb-0 px-3">
                                            <div class="">
                                                <ul class="list-group">
                                                    <div  class="col-sm-6 col-lg-12 text-decoration-none">
                                                        <div class="pb-3 d-lg-flex gx-5">
                                                            <div class="col-lg-3 ">
                                                                <img class="card-img-top" src="{{url('/file-image-client/blogs/')}}/{{ !empty($datas['blogImage']->name_image)?$datas['blogImage']->name_image:'' }}" style="height: 200px;object-fit: cover;padding:10px" alt="...">
                                                            </div>
                                                            <div class="col-lg-8 ">
                                                                <h5 style="padding-top:10px;color:#000951;font-size: 30px;font-family: serif;font-weight: 600;">{{ $datas['blogDetail']->title }}</h5>
                                                                <p style="color: #006849;">Đăng lúc: {{$created_at->diffForHumans($now)}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Start Banner Hero -->
                </div>
            </div>
        </div>
        <div class="banner-vertical-center-work container d-flex justify-content-center align-items-center" >
        <div class="banner-content col-lg-10 col-10 m-lg-auto text-left">
            <div style="color:#264451" class="light-300">
               {!! $datas['blogDetail']->decision !!}
            </div>
        </div>
    </div>
    </div>
    <!-- End Service -->
</div>
<script>
    var type = '<?php echo $datas['type']; ?>';
    if(type == 'BAO_CAO_THTT'){
        NclLib.menuActive('.link-index');
        NclLib.menuActive_child('.link-index');
    }else if(type == 'BAO_CAO_TKP'){
        NclLib.menuActive('.link-session');
        NclLib.menuActive_child('.link-session');
    }else if(type == 'BAO_CAO_PTN'){
        NclLib.menuActive('.link-industry');
        NclLib.menuActive_child('.link-industry');
    }else if(type == 'BAO_CAO_PTCP'){
        NclLib.menuActive('.link-stock');
        NclLib.menuActive_child('.link-stock');
    }
</script>
@endsection