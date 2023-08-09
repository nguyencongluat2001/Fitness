<style>
    .unit-edit span {
        font-size: 19px;
    }
    td > p { overflow-y:scroll;overflow-x:hidden;} 
    .table{
        border-color: #670000
    }
    .tdfull{
        padding: 0 !important;
    }
</style>
<form id="frmSearchCP"  role="form" action="" method="POST">
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <!-- <div class="table-responsive pmd-card pmd-z-depth "> -->
        <table  id="table-data" class="table  table-bordered table-condensed dataTable no-footer" style="background: #0000000d;" @if(!isset($_SESSION['id'])) onclick="JS_DataFinancial.checkLogin()" @endif>
            <colgroup>
                <col width="3%">
                <col width="7%">
                <col width="5%">
                <col width="10%">
                <col width="8%">
                <col width="7%">
                <col width="30%">
                <col width="10%">
                <col width="8%">
                <col width="7%">
                <col width="5%">
            </colgroup>
            <thead>
                <tr style="background:#92241a;color:white">
                    <td style="white-space: inherit;vertical-align: middle" align="center"><b>STT</b></td>
                    <!-- <td style="white-space: inherit;vertical-align: middle;background: #00ad34;animation: lights 2s 750ms linear infinite;" align="center"><b> </i>Nhập mã cổ phiếu</b> <br> <i class="fas fa-angle-double-down"></td> -->
                    <td style="white-space: inherit;vertical-align: middle;background: #00ad34;"align="center"><b> </i>Nhập mã <br> cổ phiếu</b> <br><img width="30px" height="50px" class="card-img " src="../clients/img/arrow.gif" alt="Card image"></td>
                    <td style="white-space: inherit;vertical-align: middle" align="center"><b>Sàn</b></td>
                    <td style="white-space: inherit;vertical-align: middle" align="center"><b>Nhóm nghành HĐKD</b></td>
                    <td style="white-space: inherit;vertical-align: middle" align="center"><b>Thời gian <br>cập nhật</b></td>
                    <td style="white-space: inherit;vertical-align: middle" align="center"><b>Xếp hạng <br>TA</b></td>
                    <td style="white-space: inherit;vertical-align: middle" align="center"><b>Nhận định Ta - Xu hướng CP</b></td>
                    <td style="white-space: inherit;vertical-align: middle" align="center"><b>Hành động</b></td>
                    <td style="white-space: inherit;vertical-align: middle" align="center"><b>Vùng giá <br> giao dịch</b></td>
                    <td style="white-space: inherit;vertical-align: middle" align="center"><b>Xếp hạng <br> FA</b></td>
                    <td style="white-space: inherit;vertical-align: middle" align="center"><b>Thông tin/ <br>Phân tích</b></td>
                </tr>
            </thead>
            <tbody id="body_data" style="background: #fff;">
                    @php $id = 1; @endphp
                    <tr id="code_1">
                        <td  style="vertical-align: middle;color:#83beff" align="center">
                            <span >1</span>
                        </td>
                        <td class="td_code_cp_1 tdfull" style="vertical-align: middle;" align="center" onclick="click2('1', 'code_cp',this)">
                            <span id="span_code_cp_1" class="span_code_cp_1 text-success text-uppercase"></span>
                        </td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;" id="identify_trend_1">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                    </tr>
                    <tr id="code_2">
                        <td  style="vertical-align: middle;color:#83beff" align="center">
                            <span >2</span>
                        </td>
                        <td class="td_code_cp_2 tdfull" style="vertical-align: middle;" align="center" onclick="click2('2', 'code_cp',this)">
                            <span id="span_code_cp_2" class="span_code_cp_2 text-success text-uppercase"></span>
                        </td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;" id="identify_trend_2">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                    </tr>
                    <tr id="code_3">
                        <td  style="vertical-align: middle;color:#83beff" align="center">
                            <span >3</span>
                        </td>
                        <td class="td_code_cp_3 tdfull" style="vertical-align: middle;" align="center" onclick="click2('3', 'code_cp',this)">
                            <span id="span_code_cp_3" class="span_code_cp_3 text-success text-uppercase"></span>
                        </td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;" id="identify_trend_3">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                    </tr>
                    <tr id="code_4">
                        <td  style="vertical-align: middle;color:#83beff" align="center">
                            <span >4</span>
                        </td>
                        <td class="td_code_cp_4 tdfull" style="vertical-align: middle;" align="center" onclick="click2('4', 'code_cp',this)">
                            <span id="span_code_cp_4" class="span_code_cp_4 text-success text-uppercase"></span>
                        </td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;" id="identify_trend_4">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                    </tr>
                    <tr id="code_5">
                        <td  style="vertical-align: middle;color:#83beff" align="center">
                            <span >5</span>
                        </td>
                        <td class="td_code_cp_5 tdfull" style="vertical-align: middle;" align="center" onclick="click2('5', 'code_cp',this)">
                            <span id="span_code_cp_5" class="span_code_cp_5 text-success text-uppercase"></span>
                        </td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;" id="identify_trend_5">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                        <td align="center" style="vertical-align: middle;">-</td>
                    </tr>
            </tbody>
        </table>
    <!-- </div> -->
</form>

