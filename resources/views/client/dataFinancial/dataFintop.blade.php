<style>
    .unit-edit span {
        font-size: 19px;
    }

    td>p {
        overflow-y: scroll;
        overflow-x: hidden;
    }

    th>p {
        overflow-y: scroll;
        overflow-x: hidden;
    }

    .table {
        border-color: #670000
    }

    .tdfull {
        padding: 0 !important;
    }
</style>
<form id="frmSearchCP" role="form" action="" method="POST">
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <!-- <div class="table-responsive pmd-card pmd-z-depth "> -->
    <table id="table-data" class="table  table-bordered table-condensed dataTable no-footer" style="background: #0000000d;" @if(!isset($_SESSION['id'])) onclick="JS_DataFinancial.checkLogin()" @endif>
        <colgroup>
            <col width="5%">
            <col width="6%"> <!-- macp -->
            <col width="6%"> <!-- san -->
            <col width="10%"> <!-- nhom nganh -->
            <col width="7%"> <!-- thoi gian -->
            <col width="6%"> <!-- xep hang -->
            <col width="22%"> <!-- nhan dinh TA -->
            <col width="10%"> <!-- hanh dong -->
            <col width="7%"> <!-- vung gia -->
            <col width="7%"> <!-- xep hang FA -->
            <col width="8%"> <!-- thong tin -->
        </colgroup>
        <thead>
            <tr>
                <th style="white-space: inherit;vertical-align: middle;font-size: 25px;background:#fff5dc;color:#ef1e0b;height: 80px;" align="center" colspan="3">
                    <center>NHẬP MÃ CP</center>
                </th>
                <th style="white-space: inherit;vertical-align: middle;font-size: 25px;background:#92241a;color:#fff49b" align="center" colspan="8">
                    <center>TRA CỨU CHỨNG KHOÁN (TA - FA)</center>
                </th>
            </tr>
            <tr style="background:#6add58;color:white">
                <td style="white-space: inherit;vertical-align: middle" align="center"><b>STT</b></td>
                <!-- <td style="white-space: inherit;vertical-align: middle;background: #00ad34;animation: lights 2s 750ms linear infinite;" align="center"><b> </i>Nhập mã cổ phiếu</b> <br> <i class="fas fa-angle-double-down"></td> -->
                <td style="white-space: inherit;vertical-align: middle;background: #fff5dc;" align="center"><b><img width="30px" height="50px" src="../clients/img/arrow-red.gif" alt="Card image"></td>
                <td style="white-space: inherit;vertical-align: middle" align="center"><b>Sàn</b></td>
                <td style="white-space: inherit;vertical-align: middle" align="center"><b>Nhóm nghành HĐKD</b></td>
                <td style="white-space: inherit;vertical-align: middle" align="center"><b>Thời gian <br>cập nhật</b></td>
                <td style="white-space: inherit;vertical-align: middle" align="center"><b>Xếp hạng <br>TA</b></td>
                <td style="white-space: inherit;vertical-align: middle" align="center"><b>Nhận định TA - Xu hướng cổ phiếu</b></td>
                <td style="white-space: inherit;vertical-align: middle" align="center"><b>Hành động</b></td>
                <td style="white-space: inherit;vertical-align: middle" align="center"><b>Vùng giá <br> giao dịch</b></td>
                <td style="white-space: inherit;vertical-align: middle" align="center"><b>Xếp hạng <br> FA</b></td>
                <td style="white-space: inherit;vertical-align: middle" align="center"><b>Thông tin/ <br>Phân tích</b></td>
            </tr>
        </thead>
        <tbody id="body_data" style="background: #ffffff;">
            @php $id = 1; @endphp
            @for($i = 1; $i <= 5; $i++) 
            <tr id="code_{{$i}}">
                <td  style="vertical-align: middle;color:#83beff" align="center">{{$i}}</td>
                <td class="td_code_cp_{{$i}} tdfull" style="vertical-align: middle;" align="center" onclick="click2('{{$i}}', 'code_cp',this)">
                    <span id="span_code_cp_{{$i}}" class="span_code_cp_{{$i}} text-success text-uppercase fw-bold"></span>
                </td>
                <td class="td_exchange_{{$i}}" align="center" style="vertical-align: middle;">-</td>
                <td class="td_code_category_{{$i}}" align="center" style="vertical-align: middle;">-</td>
                <td class="td_created_at_{{$i}}" align="center" style="vertical-align: middle;">-</td>
                <td class="td_ratings_TA_{{$i}}" align="center" style="vertical-align: middle;">-</td>
                <td class="td_identify_trend_{{$i}}" align="center" style="vertical-align: middle;font-size: 14px !important;">
                    <span id="span_identify_trend_{{$i}}" class="span_identify_trend_{{$i}}">-</span>
                </td>
                <td class="td_act_{{$i}}" align="center" style="vertical-align: middle;">-</td>
                <td class="td_trading_price_range_{{$i}}" align="center" style="vertical-align: middle;">-</td>
                <td class="td_ratings_FA_{{$i}}" align="center" style="vertical-align: middle;">-</td>
                <td class="td_view_{{$i}}" align="center" style="vertical-align: middle;">-</td>
            </tr>
            @endfor
        </tbody>
    </table>
    <!-- </div> -->
</form>