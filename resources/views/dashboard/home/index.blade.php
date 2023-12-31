@extends('dashboard.layouts.index')
@section('body')
<style>
        .tv-lightweight-charts{
            margin-left: 300px !important;
            margin-bottom:300px !important;
    }
</style>
    <script type="text/javascript" src="{{ URL::asset('dist\js\backend\pages\JS_Home.js') }}"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
    {{-- <link  href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" /> --}}
    <form action="" method="POST" id="frmHome_index">
        <main class="main-content position-relative border-radius-lg ">
            <div class="container-fluid py-4">
            <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-8">
                <div class="row">
                    <div class="col-xl-6 mb-xl-0 mb-4">
                    <div class="card bg-transparent shadow-xl">
                        <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg');">
                        <span class="mask bg-gradient-dark"></span>
                        <div class="card-body position-relative z-index-1 p-3">
                            <i class="fas fa-wifi text-white p-2"></i>
                            <h5 class="text-white mt-4 mb-5 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                            <div class="d-flex">
                            <div class="d-flex">
                                <div class="me-4">
                                <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                                <h6 class="text-white mb-0">Jack Peterson</h6>
                                </div>
                                <div>
                                <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                                <h6 class="text-white mb-0">11/22</h6>
                                </div>
                            </div>
                            <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                                <img class="w-60 mt-2" src="../assets/img/logos/mastercard.png" alt="logo">
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-6">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                            <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                <i class="fas fa-landmark opacity-10"></i>
                            </div>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                            <h6 class="text-center mb-0">Salary</h6>
                            <span class="text-xs">Belong Interactive</span>
                            <hr class="horizontal dark my-3">
                            <h5 class="mb-0">+$2000</h5>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 mt-md-0 mt-4">
                        <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                            <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                <i class="fab fa-paypal opacity-10"></i>
                            </div>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                            <h6 class="text-center mb-0">Paypal</h6>
                            <span class="text-xs">Freelance Payment</span>
                            <hr class="horizontal dark my-3">
                            <h5 class="mb-0">$455.00</h5>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Payment Method</h6>
                            </div>
                            <div class="col-6 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                            </div>
                        </div>
                        </div>
                        <div class="card-body p-3">
                        <div class="row">
                            <div class="col-md-6 mb-md-0 mb-4">
                            <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                <img class="w-10 me-3 mb-0" src="../assets/img/logos/mastercard.png" alt="logo">
                                <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                                <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                <img class="w-10 me-3 mb-0" src="../assets/img/logos/visa.png" alt="logo">
                                <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                                <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Card"></i>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Invoices</h6>
                            </div>
                            <div class="col-6 text-end">
                            <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                            </div>
                        </div>
                        </div>
                        <div class="card-body p-3 pb-0">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark font-weight-bold text-sm">March, 01, 2020</h6>
                                <span class="text-xs">#MS-415646</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                                $180
                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                            </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="text-dark mb-1 font-weight-bold text-sm">February, 10, 2021</h6>
                                <span class="text-xs">#RV-126749</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                                $250
                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                            </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="text-dark mb-1 font-weight-bold text-sm">April, 05, 2020</h6>
                                <span class="text-xs">#FB-212562</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                                $560
                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                            </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="text-dark mb-1 font-weight-bold text-sm">June, 25, 2019</h6>
                                <span class="text-xs">#QW-103578</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                                $120
                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                            </div>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="text-dark mb-1 font-weight-bold text-sm">March, 01, 2019</h6>
                                <span class="text-xs">#AR-803481</span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                                $300
                                <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                            </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content-wrapper">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row form-group">
                                <div class="col-lg-12" style="padding:2px;">
                                    <!-- <h class="h4 py-2"><i class="far fa-chart-bar"></i>. <span style="font-family: auto;" > Biểu đồ</span> </h> <br> -->
                                    <iframe style="width:100%" height="620" src="https://fireant.vn/charts" 
                                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                        allowfullscreen>
                                    </iframe>
                                    <p>Nguồn theo: fireant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </main>
    </form>
    
    <div class="modal fade" id="editmodal" role="dialog"></div>
    <div class="modal " id="addfile" role="dialog"></div>

    <div id="dialogconfirm"></div>
    <script src='../assets/js/jquery.js'></script>
    <script type="text/javascript">
        var baseUrl = '{{ url('') }}';
        var JS_Home = new JS_Home(baseUrl, 'system', 'home');
        $(document).ready(function($) {
            JS_Home.loadIndex(baseUrl);
        })
    </script>

@endsection
