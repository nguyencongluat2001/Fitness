<style>
    .title_table{
        font-size:16px !important;
    }
    .table{
        border-color: #670000
    }
</style>
<div class="table-responsive pmd-card pmd-z-depth pt-2">
    <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer" >
        <colgroup>
            <col width="8%"> <!-- % Chot -->
            <col width="9%"> <!-- ma cp -->
            <col width="10%"> <!-- nhom nganh -->
            <col width="8%"> <!-- ngay mua -->
            <col width="8%"> <!-- % tai san -->
            <col width="8%"> <!-- gia mua -->
            <col width="8%"> <!-- ngay chot -->
            <col width="8%"> <!-- gia chot -->
            <col width="8%"> <!-- lai lo -->
            <col width="25%"> <!-- ghi chu -->
        </colgroup>
        <thead>
            <tr style="background:#3a760c;color:white">
                {{--<td align="center" style="white-space: inherit; vertical-align: middle;"><b>STT</b></td>--}}
                <td align="center" style="white-space: inherit; vertical-align: middle;background:#ffef6d;color:red"><b>% Bán</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;"><b>Mã cổ phiếu</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;"><b>Nhóm ngành</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;"><b>Ngày mua</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;"><b>% Tài sản</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;"><b>Giá mua</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;"><b>Ngày bán</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;"><b>Giá bán</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;"><b>Lãi/Lỗ</b></td>
                <td align="center" style="white-space: inherit; vertical-align: middle;"><b>Ghi chú</b></td>
            </tr>
        </thead>
        <tbody>
            @if(isset($datas) && count($datas) > 0)
            @foreach ($datas as $key => $data)
                <tr >
                    {{--<td align="center" >{{ $key + 1 }}</td>--}}
                    <td align="center" style="white-space: inherit; vertical-align: middle;background:#ffef6d;color:red;font-weight:bold;">
                        <span>{{ $data['closing_percentage']}}</span>
                    </td>
                    <td align="center" class="text-uppercase" style="white-space: inherit; vertical-align: middle;font-weight:bold;">
                        <span>{{ $data['code_cp']}}</span>
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;">
                        <span>{{ $data['name_category']}}</span>
                    </td>
                    <td>{{ !empty($data['created_at']) ? date('d/m/Y', strtotime($data['created_at'])) : '' }}</td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;">
                        <span>{{ $data['percent_of_assets']}}</span>
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;">
                        <span>{{ $data['price']}}</span>
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;">
                        {{ !empty($data['date_close']) ? date('d/m/Y', strtotime($data['date_close'])) : '' }}
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;">
                        <span>{{ $data['price_close']}}</span>
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;background:#b6d3ac">
                        <span>{{ $data['profit_and_loss']}}</span>
                    </td>
                    <td align="center" style="white-space: inherit; vertical-align: middle;font-weight:bold;">
                        <span>{{ $data['note']}}</span>
                    </td>
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
