<div class="table-responsive pmd-card pmd-z-depth ">
    <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer">
        <!-- <colgroup>
            <col width="5%">
            <col width="5%">
            <col width="20%">
            <col width="20%">
            <col width="15%">
            <col width="15%">
            <col width="15%">
            <col width="10%">
            <col width="5%">
        </colgroup> -->
        <thead>
            <tr>
                <td align="center"><input type="checkbox" name="chk_all_item_id"
                        onclick="checkbox_all_item_id(document.forms[0].chk_item_id);"></td>
                <td align="center"><b>STT</b></td>
                <td align="center"><b>Tên khách hàng</b></td>
                <!-- <td align="center"><b>Người giới thiệu</b></td> -->
                <td align="center"><b>Gói nâng cấp</b></td>
                <td align="center"><b>Loại Banking</b></td>
                <!-- <td align="center"><b>Ảnh giao dịch</b></td> -->
                <td align="center"><b>Trạng thái</b></td>
                <td align="center"><b>Phê duyệt</b></td>
                <td align="center"><b>#</b></td>
            </tr>
        </thead>
        <tbody id="body_data">
            @if(count($datas) > 0)
                @foreach ($datas as $key => $data)
                @php $id = $data->id; $i = 1; @endphp
                    <tr>
                        <td style="width:5% ;vertical-align: middle;" align="center" ><input type="checkbox" name="chk_item_id"
                                value="{{ $data->id }}"></td>
                        <td style="width:5% ;vertical-align: middle;" align="center" >{{($datas->currentPage() - 1)*$datas->perPage() + ($key + 1)}}</td>
                        <!-- <td onclick="{select_row(this);}">{{ isset($data->users->name) ? $data->users->name : '' }}</td> -->
                        <td style="width:15% ;vertical-align: middle;" align="center" onclick="{select_row(this);}">{{ isset($data->user_name) ? $data->user_name : '' }}</td>
                        <td style="width:15% ;vertical-align: middle;" align="center" onclick="{select_row(this);}">{{ isset($data->role) ? $data->role : '' }}</td>
                        <!-- <td style="white-space: inherit;vertical-align: middle;" align="center">{{ isset($data->money) ? $data->money : '' }}</td> -->
                        @if($data->type_payment == 'BANK')
                        <td style="width:15% ;color:#00ab5f;white-space: inherit;vertical-align: middle;" align="center">Ngân hàng</td>
                        @else
                        <td style="width:15% ;color:#ff00c5;white-space: inherit;vertical-align: middle;" align="center">MoMo</td>
                        @endif
                        <!-- <td style="width:20%;vertical-align: middle;" align="center"><img  src="{{url('/file-payment/')}}/{{ !empty($data->image)?$data->image:'' }}" alt="Image" style="height: 150px;width: 150px;object-fit: cover;"></td> -->
                        <!-- <td onclick="{select_row(this);}" align="center">{{ isset($data->categorys->name_category) ? $data->categorys->name_category : '' }}</td> -->
                        @if($data->status == 1) 
                        <td style="color:#11ab00;width:15% ;vertical-align: middle;" align="center" onclick="{select_row(this);}" align="center"><b>{{ $data->status_name }}</b></td>
                        @else 
                        <td style="color:red;width:15% ;vertical-align: middle;" align="center" onclick="{select_row(this);}" align="center"><b>{{ $data->status_name }}</b></td>
                        @endif
                        <td style="width:5% ;vertical-align: middle;" align="center" onclick="{select_row(this);}" align="center">
                            <label class="custom-control custom-checkbox p-0 m-0 pointer " style="cursor: pointer;">
                                <input type="checkbox" hidden class="custom-control-input toggle-status" id="status_{{$id}}" data-id="{{$id}}" {{ $data->status == 1 ? 'checked' : '' }}>
                                <span class="custom-control-indicator p-0 m-0" onclick="JS_ApprovePayment.changeStatusApprovePayment('{{$id}}')"></span>
                            </label>
                        </td>
                        <td style="width:5% ;color: #ffb600;white-space: inherit;vertical-align: middle;" align="center" onclick="JS_ApprovePayment.edit('{{$id}}')"><i class="far fa-eye"></i></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            @if(count($datas) > 0)
            <tr class="fw-bold" id="pagination">
                <td colspan="10">{{$datas->links('pagination.phantrang')}}</td>
            </tr>
            @else
            <tr id="pagination" align="center">
                <td colspan="10">Không tìm thấy dữ liệu!</td>
            </tr>
            @endif
        </tfoot>
    </table>
</div>
