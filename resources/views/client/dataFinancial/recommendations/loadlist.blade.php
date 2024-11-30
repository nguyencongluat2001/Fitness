<style>
#messages {
  overflow: auto;
  bottom: 0;
  width: 100%;
  max-height: 1200px;
}
</style>
    <div id="">
        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
        <div class="chat">
        <!-- @if(!isset($_SESSION['account_type_vip']) || $_SESSION['account_type_vip'] != 'VIP1') class="onload" @endif -->
            <div  id="messages">
                    @foreach ($datas as $key => $data)

                    <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-5" style="background:#ffffff">
                        <div class="pricing-horizontal-icon col-md-3 text-center bg-secondary text-light p-0">
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
                                <li style="color: #2a2d45;font-family: serif;font-weight: 600;"><h3>
                                    @if($data['type'] == 'MUA')
                                        @if((isset($_SESSION['role']) && $_SESSION['role'] != 'USERS') || (isset($_SESSION['account_type_vip']) && ($_SESSION['account_type_vip'] == 'VIP2' || $_SESSION['account_type_vip'] == 'KIM_CUONG')))
                                            {{ $data['title'] }}
                                        @else
                                             <span style="color:#39af71;font-size:28px">{{ $data['title'] }}<i class="far fa-eye-slash fa-xs"></i></span>
                                        @endif
                                    @else
                                        @if((isset($_SESSION['role']) && $_SESSION['role'] != 'USERS') || (isset($_SESSION['account_type_vip']) && ($_SESSION['account_type_vip'] == 'VIP2' || $_SESSION['account_type_vip'] == 'KIM_CUONG')))
                                            {{ $data['title'] }}
                                        @else
                                            <span style="color:#c11a1a;font-size:28px">{{ $data['title'] }}<i class="far fa-eye-slash fa-xs"></i></span>
                                        @endif
                                    @endif
                                <!-- {{ $data['title'] }} -->
                                </h3></li>
                                
                                 </li>
                                 <div style="display:flex">
                                    <div style="    width: 400px;">
                                        @if($data['type'] == 'MUA')
                                        <li><i class="fas fa-tags me-2"></i>
                                        Tỉ trọng: {{ $data['price_buy'] }}
                                        </li>
                                        <li><i class="far fa-lightbulb me-2"></i>&nbsp;&nbsp;
                                        Mục tiêu:
                                            <span style="color: #2c4143;font-weight: 700;">
                                                {{ $data['target'] }}
                                            </span>
                                            </li>
                                            <li><i class="fas fa-filter me-2"></i>&nbsp;
                                            Dừng lỗ:
                                            <span style="color: #2c4143;font-weight: 700;">
                                                {{ $data['stop_loss'] }}
                                            </span>
                                            </li>
                                        @else
                                                <li><i class="fas fa-tags me-2"></i>
                                                    % Còn lại: 
                                                            <span style="color: #2c4143;font-weight: 700;">
                                                                {{ $data['stop_loss'] }}
                                                            </span>
                                                </li>
                                                <li><i class="fas fa-tags me-2"></i>
                                            Giá mua TB: {{ $data['price_buy'] }}
                                            </li>
                                            <li><i class="fas fa-tags me-2"></i>
                                            Lãi / lỗ: {{ $data['target'] }}
                                            </li>
                                        @endif
                                    </div>
                                    <div style=""> 
                                        <center>
                                            <i class="fas fa-stopwatch"></i>&nbsp;&nbsp; Thời gian <br>
                                            <span style="color: #2c4143;font-weight: 700;"> {{date('H:i:s', strtotime($data['created_at']))}}</span> <br>
                                            <span style="color: #2c4143;font-weight: 700;"> {{date('d-m-Y', strtotime($data['created_at']))}}</span>
                                        </center>
                                    </div>
                                 </div>
                                
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

