<style>
    .unit-edit span {
        font-size: 19px;
    }
</style>
{{-- @php
use Modules\System\Recordtype\Helpers\WorkflowHelper;
@endphp --}}
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto " style="display:flex">
            <div class="input-group box">
                    <input id="myInput" onkeyup="myFunction()"style="background: #000000;color: #ff9700;" type="text" class="input form-control form-control-lg rounded-pill rounded" placeholder="Từ kiếm theo từ khóa...">
            </div>
        </div>
    </div>
</div>
<div class="table-responsive pmd-card pmd-z-depth pt-2">
    <table  id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer">
        <thead>
            <tr>
                <td align="center"><input type="checkbox" name="chk_all_item_id"
                        onclick="checkbox_all_item_id(document.forms[0].chk_item_id);"></td>
                <td align="center"><b>STT</b></td>
                <td align="center"><b>Thông tin người dùng</b></td>
                <td align="center"><b>Ảnh đại diện</b></td>
                <td align="center"><b>Trạng thái</b></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $data)
            @php $id = $data['id']; @endphp
                <tr>
                    <td style="width:5%;vertical-align: middle;" align="center"><input type="checkbox" name="chk_item_id"
                            value="{{ $data['id'] }}"></td>
                    <td style="width:5%;vertical-align: middle;" align="center">{{ $key + 1 }}
                    <td style="width:65%;height:150px;padding-left:30px;vertical-align: middle;" onclick="{select_row(this);}">
                       <div>
                           <div>Tên: {{ $data['name'] }}</div>
                           <div>ID nhân sự : <span style="color:#ffb200">{{ $data['id_personnel'] }}</span> </div>
                           <div>Số điện thoại : {{ $data['phone'] }}</div>
                           <div>Địa chỉ Email : {{ $data['email'] }}</div>
                           <div>Địa chỉ : {{ $data['address'] }}</div>
                           <div>Ngày sinh : {{ $data['dateBirth'] }}</div>
                           @if($data['role_admin'] == 'ADMIN')
                           <div>Quyền truy cập : <span style="color:#ff7c00"> CEO </span></div>
                           @elseif($data['role_manage'] == 'MANAGE')
                           <div>Quyền truy cập : <span style="color:#ff7c00"> Trợ lý CEO </span></div>
                           @elseif($data['role_cv_admin'] == 'CV_ADMIN')
                           <div>Quyền truy cập : <span style="color:#ff7c00"> Editor Admin </span></div>
                           @elseif($data['role_cv_pro'] == 'CV_PRO')
                           <div>Quyền truy cập : <span style="color:#ff7c00"> Editor Pro </span></div>
                           @elseif($data['role_cv_basic'] == 'CV_BASIC')
                           <div>Quyền truy cập : <span style="color:#ff7c00"> Editor basic </span></div>
                           @elseif($data['role_sale_admin'] == 'SALE_ADMIN')
                           <div>Quyền truy cập : <span style="color:#ff7c00"> Sale Admin </span></div>
                           @elseif($data['role_Sale'] == 'SALE_BASIC')
                           <div>Quyền truy cập : <span style="color:#ff7c00"> Sale </span></div>
                           @elseif($data['role_Users'] == 'USERS')
                           <div>Quyền truy cập : <span style="color:#ff7c00"> Khách hàng </span></div>
                           @endif
                           <!-- <div>Quyền quản trị : <span class="animate-charcter">Quản trị hệ thống</span></div> -->
                       </div>
                        
                    </td>
                    <td style="width:20%;vertical-align: middle;" align="center" onclick="{select_row(this);}">
                        <img  src="{{url('/file-image/avatar/')}}/{{$data['avatar']}}" alt="Image" style="height: 150px;width: 150px;object-fit: cover;">
                    </td>
                    <td onclick="{select_row(this);}" align="center">
                        <label class="custom-control custom-checkbox p-0 m-0 pointer " style="cursor: pointer;">
                            <input type="checkbox" hidden class="custom-control-input toggle-status" id="status_{{$id}}" data-id="{{$id}}" {{ $data->status == 1 ? 'checked' : '' }}>
                            <span class="custom-control-indicator p-0 m-0" onclick="JS_User.changeStatus('{{$id}}')"></span>
                        </label>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="width:100%" class="row">
    {{--<tfoot>
        <tr>
            <td colspan="10">
                {{$datas->links('pagination.phantrang')}}
            </td>
        </tr>
    </tfoot>--}}
    </div>
</div>

<script>

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table-data");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
