@extends('client.layouts.index')
@section('body-client')
<link rel="stylesheet" href="../clients/css/style.css">
<script type="text/javascript" src="{{ URL::asset('dist\js\backend\client\JS_InforClient.js') }}"></script>
<title>TÀI CHÍNH & ĐẦU TƯ</title>
<style>
    form{
        width: 100%; 
        padding-left: 0px;
    }
    /* .form-control{
        color:#fff079;
    } */
   button:before {
      background: none ;
   }
   .form-control{
      background: #ffffff ;
   }
   .form-control-label{
      color: #ffffff;
      padding-left: 20px;
   }
   .infor-avatar{
    position: relative;
   }
   .infor-avatar .upload-avatar{
    position: absolute;
    right: 0;
    bottom: 0;
    width: 2rem;
    height: 2rem;
    border: 1px solid #fff;
    border-radius: 50%;
    background-color: #ccc;
    display: flex;
    align-items: center;
    justify-content: center;
   }

</style>
<section class="container">
    <div class=" pb-3 d-lg-flex gx-5">
        <div class="col-lg-12">
            <form action="" method="POST" id="frmLoadlist_infor">
                @csrf
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="role" id="role" value="{{ isset($datas->role) ? $datas->role : '' }}">
                <input type="hidden" name="id" id="id" value="{{ isset($datas->id) ? $datas->id : '' }}">
                <div class="home_index_vnindex pt-1 pb-3" style="background:#ffffff91 !important;border-radius:0px !important">
                    <!-- phần giới thiệu FIn top -->
                    <div class="home_index_child" style="background:#700e13 !important">
                        <div class="col-lg-12" style="padding:10px;">
                            <div class="row">
                                <div class="col-md-8" style="color: black;">
                                   {{-- @if(!empty($data) && $_SESSION["email"] == $data['email']) --}}
                                    <span id='btn_changePass'>
                                        <button class="btn rounded-pill px-4 btn-outline-warning" style="background: #165c38;color: #fff079;font-weight: 600;" type="button">
                                            Đổi mật khẩu
                                        </button>
                                    </span>

                                    {{-- @endif --}}
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p for="example-text-input" class="form-control-label">Tên</p>
                                                    <input class="form-control" type="text" name="name" value="{{isset($datas->name) ? $datas->name : ''}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <p for="example-text-input" class="form-control-label">Địa chỉ Email</p>
                                                    <input class="form-control" type="email" name="email" value="{{isset($datas->email) ? $datas->email : ''}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pt-2">
                                                <div class="form-group">
                                                    <p for="example-text-input" class="form-control-label">Ngày sinh</p>
                                                    <input class="form-control" type="date" name="dateBirth" value="{{isset($datas->dateBirth) ? $datas->dateBirth : ''}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pt-2">
                                                <div class="form-group">
                                                    <p for="example-text-input" class="form-control-label">Số điện thoại</p>
                                                    <input class="form-control" type="text" name="phone" value="{{isset($datas->phone) ? $datas->phone : ''}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pt-2">
                                                <div class="form-group">
                                                    <p for="example-text-input" class="form-control-label">Địa chỉ</p>
                                                    <input class="form-control" type="text" name="address" value="{{isset($datas->address) ? $datas->address : ''}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pt-2">
                                                <div class="form-group">
                                                    <p for="example-text-input" class="form-control-label">Công ty</p>
                                                    <input class="form-control" type="text" name="company" value="{{isset($datas->user_infor->company) ? $datas->user_infor->company : ''}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pt-2">
                                                <div class="form-group">
                                                    <p for="example-text-input" class="form-control-label">Chức vụ</p>
                                                    <input class="form-control" type="text" name="position" value="{{isset($datas->user_infor->position) ? $datas->user_infor->position : ''}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pt-2">
                                                <div class="form-group">
                                                    <p for="example-text-input" class="form-control-label">Gia nhập ngày</p>
                                                    <input class="form-control" type="date" name="date_join" value="{{isset($datas->user_infor->date_join) ? $datas->user_infor->date_join : ''}}">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <center>
                                            <button style="background: #165c38;color: #fff079;font-weight: 600;" type="button" class="btn rounded-pill px-4 btn-outline-warning" onclick="JS_InforClient.updateCustomer()" type="button">
                                                Cập nhật
                                            </button>
                                        </center>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-profile">
                                        <div class=" justify-content-center" style="--bs-gutter-x: 1.5rem;
                                                                                    --bs-gutter-y: 0;
                                                                                    display: flex;
                                                                                    flex-wrap: wrap;
                                                                                    margin-top: calc(var(--bs-gutter-y) * -1);
                                                                                    margin-right: none !important;
                                                                                    margin-left: calc(var(--bs-gutter-x)/ -2);">
                                            <div class="col-4 col-lg-4 order-lg-2">
                                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0 infor-avatar">
                                                    <a href="javascript:;">
                                                        <img id="avatar" src="{{url('file-image/avatar')}}/{{$datas->avatar}}" style="height: 140px;width: 150px;object-fit: cover;border-radius:50%">
                                                    </a>
                                                    <label for="upload-avatar" class="upload-avatar" type="button"><i class="fas fa-camera"></i></label>
                                                    <input type="file" hidden name="upload-avatar" id="upload-avatar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="text-center mt-4">
                                                <h5>
                                                    {{isset($datas->name) ? $datas->name : ''}}
                                                </h5>
                                                <div>
                                                    <i class="ni location_pin mr-2"></i>Hội viên: 
                                                    @if(isset($datas->account_type_vip) && $datas->account_type_vip == 'VIP1')
                                                       Bạc
                                                    @elseif(isset($datas->account_type_vip) && $datas->account_type_vip == 'VIP2')
                                                       Vàng
                                                    @else
                                                       Tiêu Chuẩn
                                                    @endif
                                                    <br>
                                                    <i class="ni location_pin mr-2"></i>Ngày đăng ký: {{isset($datas->date_update_vip) ? $datas->date_update_vip : ''}}
                                                </div>
                                                <br>
                                                <a type="button" class="btn rounded-pill px-4 btn-outline-warning" style="background: #165c38;color:#fff079;font-weight: 600;" href="{{ url('client/privileges/index') }}"></i>Nâng cấp tài khoản</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if(count($vip) > 0)
    <div class="home_index_vnindex pt-1 pb-3" style="background:#ffffff91 !important;border-radius:0px !important">
        <!-- phần giới thiệu FIn top -->
        <div class="home_index_child" >
            <div class="col-lg-12" style="padding:10px;">
                <div class="row">
                <table id="table-data" style="background:#700e13 !important;color: white;" class="table  table-bordered table-striped table-condensed dataTable no-footer">
                    <colgroup>
                        <col width="30%">
                        <!-- <col width="10%"> -->
                        <col width="70%">
                    </colgroup>    
                    <thead>
                        <tr>
                            <td style="white-space: inherit;vertical-align: middle" align="center"><b>Thông tin</b></td>
                            <td style="white-space: inherit;vertical-align: middle" align="center"><b>Hóa đơn</b></td>
                        </tr>
                    </thead>
                    <tbody id="body_data">
                        @if(count($vip) > 0)
                            @foreach ($vip as $key => $data)
                            @php $id = $data->id; $i = 1; @endphp
                            <tr style="color:#ffffff">
                                <td style="white-space: inherit;    font-size: 20px;" >
                                    <span>
                                        <?php $convert = json_decode($data->package);
                                         ?>
                                            <span>Ngày thanh toán: {{!empty($data->created_at)?$data->created_at:''}}</span><br>
                                            <span>Loại gói: {{!empty($convert->name)?$convert->name:''}}</span><br>
                                            <span>Trạng thái phê duyệt: @if($data->status == 0)
                                                Chưa phê duyệt
                                                @else
                                                Đã phê duyệt
                                                @endif
                                            </span><br>

                                    </span>
                                </td>
                                <td style="white-space: inherit;vertical-align: middle" >
                                    <span>
                                        <div class="m-auto py-2">
                                            @if($convert->code == 'VIP1_3')
                                            <img class="card-img " src="../clients/img/vip1_3.PNG" alt="Card image" style="width:100%">
                                            @elseif($convert->code == 'VIP1_6')
                                            <img class="card-img " src="../clients/img/vip1_6.PNG" alt="Card image" style="width:100%">
                                            @elseif($convert->code == 'VIP1_12')
                                            <img class="card-img " src="../clients/img/vip1_12.PNG" alt="Card image" style="width:100%">
                                            @elseif($convert->code == 'VIP2_3')
                                            <img class="card-img " src="../clients/img/vip2_3.PNG" alt="Card image" style="width:100%">
                                            @elseif($convert->code == 'VIP2_6')
                                            <img class="card-img " src="../clients/img/vip2_6.PNG" alt="Card image" style="width:100%">
                                            @elseif($convert->code == 'VIP2_12')
                                            <img class="card-img " src="../clients/img/vip2_12.PNG" alt="Card image" style="width:100%">
                                            @endif
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
<script src="../clients/js/jquery.min.js"></script>
<div class="modal fade" id="editmodal" role="dialog"></div>
<div class="modal " id="editPassmodal" role="dialog" style=" width: 100%;height: 100%;background: #0000007d; background-repeat:no-repeat;background-size: cover;"></div>

<div id="dialogconfirm"></div>
<script type="text/javascript">
    var baseUrl = '{{ url('') }}';
    var JS_InforClient = new JS_InforClient(baseUrl, 'client', 'infor');
    $(document).ready(function($) {
        JS_InforClient.loadIndex(baseUrl);
    })
</script>
@endsection