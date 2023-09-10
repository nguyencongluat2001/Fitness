<style>
    .title_table{
        font-size:16px !important;
    }
    .table{
        border-color: #670000
    }
</style>
<div class="table-responsive pmd-card pmd-z-depth pt-2">
    <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer"  @if(!isset($_SESSION['id'])) onclick="JS_CategoryFintop.checkLogin()" @endif>
        <colgroup>
            <col width="10%"> <!-- ma cp -->
            <col width="9%"> <!-- nhom nganh --> 
            <col width="6%"> <!-- ngay mua -->
            <col width="7%"> <!-- %  tai san -->
            <col width="6%"> <!-- gia mua -->
            <col width="8%"> <!-- gia hien tai -->
            <col width="6%"> <!-- lai/lo -->
            <col width="15%"> <!-- khuyen nghi hanh đong -->
            <col width="5%"> <!-- vung gia muc tieu -->
            <col width="5%"> <!-- vung gia muc tieu -->
            <col width="5%"> <!-- vung gia muc tieu -->
            <col width="7%"> <!-- dung lo -->
            <col width="9%"> <!-- ghi chu -->
        </colgroup>
        <thead style="background:#3a760c;color:white">
            <tr>
                {{--<td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>STT</b></td>--}}
                <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Mã cổ phiếu</b></td>
                <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Nhóm ngành</b></td>
                <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Ngày mua</b></td>
                <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;background:#fbff2f;color:#f82f15"><b>% Tài sản</b></td>
                <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Giá mua</b></td>
                <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Giá hiện tại</b></td>
                <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Lãi/Lỗ</b></td>
                <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Khuyến nghị hành động</b></td>
                <!-- <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Vùng giá mục tiêu (TA1)</b></td> -->
                <!-- <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Vùng giá mục tiêu (TA2)</b></td> -->
                <td colspan="3" align="center" style="white-space: inherit; vertical-align: middle;background:#fbff2f;color:#f82f15"><b>Vùng giá mục tiêu</b></td>
                <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Dừng lỗ</b></td>
                <!-- <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;background:#fbff2f;color:#f82f15"><b>% Chốt</b></td> -->
                <td rowspan="2" align="center" style="white-space: inherit; vertical-align: middle;"><b>Ghi chú</b></td>
            </tr>
            <tr>
                <td align="center" style="white-space: inherit; vertical-align: middle;background:#fbff2f;color:#f82f15"><b>Tar1</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;background:#fbff2f;color:#f82f15"><b>Tar2</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;background:#fbff2f;color:#f82f15"><b>Tar3</b></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $data)
                <tr>
                    {{--<td align="center" >{{ $key + 1 }}</td>--}}
                    <td align="center" class="text-uppercase" style="white-space: inherit; vertical-align: middle;font-weight:bold;">
                        @if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['code_cp'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;">
                        @if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['name_category'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;">
                        {{ !empty($data['created_at']) ? date('d/m/Y', strtotime($data['created_at'])) : '' }}
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;background:#ffef6d;color:red;">
                        @if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['percent_of_assets'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;font-weight:bold;">
                        {{--@if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['price'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif--}}
                        <span>{{ $data['price'] }}</span>
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;font-weight:bold;">
                    {{--@if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['current_price'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif
                        --}}
                        <span>{{ $data['current_price'] }}</span>

                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;background:#b6d3ac;font-weight:bold;">
                        {{--@if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['profit_and_loss'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif--}}
                        <span>{{ $data['profit_and_loss'] }}</span>

                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;">
                        <span>{{ $data['act'] }}</span>
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;font-weight:bold;background: #ffef6d;">
                        @if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['ta1'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;font-weight:bold;background: #ffef6d;">
                        @if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['ta2'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;font-weight:bold;background: #ffef6d;">
                        @if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['ta3'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;color:red;font-weight:bold;">
                        @if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['stop_loss'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif
                    </td>
                    <!-- <td align="center" style="white-space: inherit; vertical-align: middle;background:#ffef6d;color:red;font-weight:bold;">
                        @if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                        <span>{{ $data['closing_percentage'] ?? '' }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif
                    </td> -->
                    <td align="center" style="white-space: inherit; vertical-align: middle;font-weight:bold;">
                    @if(Auth::check() && isset($_SESSION['account_type_vip']) && $_SESSION['account_type_vip'] == 'VIP1')
                    <span>{{ $data['note'] }}</span>
                        @else
                        <span style="color:#00a25f"><i class="fas fa-eye-slash"></i></span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
