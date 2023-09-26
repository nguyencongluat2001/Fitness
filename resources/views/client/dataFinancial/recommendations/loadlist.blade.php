<style>
#messages {
  overflow: auto;
  bottom: 0;
  width: 100%;
  max-height: 600px;
}
</style>
    <div id="">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <div class="chat">
            <div  id="messages" @if(!isset($_SESSION['account_type_vip']) || $_SESSION['account_type_vip'] != 'VIP1') class="onload" @endif>
                    <!-- @foreach ($datas as $key => $data)
                    <div class="d-flex flex-row justify-content-start mb-4 avatarMessage">
                        <img src="../clients/img/LogoFinTop_red.png"
                            alt="avatar 1" style="width: 30px; height: 100%;">
                        @if($data['type'] == 'MUA')
                        <div class=" d-flex p-3 ms-3" style="border-radius: 15px; background-color: #2a3546;color:#ffd743;width:100%;font-family:auto">
                        @else
                        <div class=" d-flex p-3 ms-3" style="border-radius: 15px; background-color: #861515;color:white;width:100%;font-family:auto">
                        @endif
                        <div style="width:30%; display: flex; align-items: center;">
                            <img src="{{url('/file-image-client/blogs/2023_05_10_1353000000541828!~!image_background.png')}}"
                                alt="avatar 1" width="100%" style="object-fit: cover; max-width: 250px;">
                        </div>
                        <div style="padding-left:30px">
                            <h4>{{ $data['title'] }}</h4>
                            <span>Giá mua: 
                            @if(isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                                {{ $data['price_buy'] }}
                            @else
                                xxx
                            @endif
                            </span> <br>
                            <span>Mục tiêu: 
                            @if(isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                               {{ $data['target'] }}
                            @else
                                xxx
                            @endif
                            </span> <br>
                            <span>Dừng lỗ:  
                            @if(isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                            {{ $data['stop_loss'] }}
                            @else
                                xxx
                            @endif
                            </span> <br>
                            <span>Thời gian: {{date('H:i:s d-m-Y', strtotime($data['created_at']))}}</span>
                        </div>
                                                    </div>
                    </div>
                    @endforeach -->
                    @foreach ($datas as $key => $data)

                    <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-5" style="background:#ffffff">
                        <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light p-0">
                            {{--
                            <i class="display-1 bx bx-package pt-4"></i>
                            @if($data['type'] == 'MUA')
                            <h5 class="h5 pb-4">Mua</h5>
                            @else
                            <h5 class="h5 pb-4">Bán</h5>
                            @endif
                            --}}
                            @if($data['type'] == 'MUA')
                            <img src="{{URL::asset('clients/img/mua.jpg')}}" alt="Mua" width="100%" height="100%">
                            @else
                            <img src="{{URL::asset('clients/img/ban.jpg')}}" alt="Bán" width="100%" height="100%">
                            @endif
                        </div>
                        <div class="text-light col-lg-9" 
                            @if($data['type'] == 'BAN') style="background-color: rgba(113, 14, 19, 0.20);display: flex;align-items: center;" 
                            @else style="background-color: #0e5c3533;display: flex;align-items: center;" 
                            @endif>
                            <ul class="text-left list-unstyled mb-0" style="color: #596986;font-family: ui-monospace;">
                                <li style="color: #2a2d45;font-family: serif;font-weight: 600;"><h3>{{ $data['title'] }}</h3></li>
                                <li><i class="fas fa-tags me-2"></i>Giá mua: 
                                <span style="color: #2c4143;font-weight: 700;">
                                    {{-- @if(isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1') --}}
                                        {{ $data['price_buy'] }}
                                    {{-- @else
                                        xxx
                                    @endif --}}
                                </span>    
                                </li>
                                <li><i class="far fa-lightbulb me-2"></i>&nbsp;&nbsp;Mục tiêu: 
                                <span style="color: #2c4143;font-weight: 700;">
                                    {{-- @if(isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1') --}}
                                    {{ $data['target'] }}
                                    {{-- @else
                                        xxx
                                    @endif --}}
                                </span>
                                </li>
                                <li><i class="fas fa-filter me-2"></i>&nbsp;Dừng lỗ: 
                                <span style="color: #2c4143;font-weight: 700;">
                                    {{-- @if(isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1') --}}
                                    {{ $data['stop_loss'] }}
                                    {{-- @else
                                        xxx
                                    @endif --}}
                                </span>
                                </li>
                                <li><i class="fas fa-stopwatch"></i>&nbsp;&nbsp; Thời gian: <span style="color: #2c4143;font-weight: 700;"> {{date('H:i:s d-m-Y', strtotime($data['created_at']))}}</span></li>
                            </ul>
                        </div>
                        {{--<div class="pricing-horizontal-tag col-md-3 text-center pt-3 d-flex align-items-center">
                            <div class="w-100">
                            </div>
                        </div>--}}
                    </div>
                    @endforeach
            </div>
            
        </div>
        <div id="message-alert" class="content">
            <h4 class="m-0 p-0"><strong><i id="message-icon"></i> <span id="message-label"></span></strong></h4>
            <span id="message-infor"></span>
        </div>
    </div>

