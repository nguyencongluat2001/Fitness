<style>
    .title_table{
        font-size:16px !important;
    }
    .table{
        border-color: #670000
    }
</style>
<div class="pmd-card pmd-z-depth ">
    <table id="table-data" class="table  table-bordered table-striped table-condensed dataTable no-footer" style="background-color: #fff;">
        <colgroup>
            <col width="5%">
            <col width="85%">
            <col width="10%">
        </colgroup>
        <thead>
            <tr style="background: #92241a;color:white;">
                <!-- <td align="center"><input type="checkbox" name="chk_all_item_id"
                        onclick="checkbox_all_item_id(document.forms[0].chk_item_id);"></td> -->
                <td align="center"><b class="title_table">STT</b></td>
                <td align="center"><b class="title_table">Nội dung</b></td>
                <td align="center"><b class="title_table">Link</b></b></td>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($datas as $key => $data)
                <tr>
                    <!-- <td style="padding-top: 20px;"align="center"><input type="checkbox" name="chk_item_id"
                            value="{{ $data->id }}"></td> -->
                    <td align="center">{{ $key + 1 }}
                    <td style="white-space: inherit;" ondblclick="" onclick="{select_row(this);}">
                       {{$data->name_handbook}}
                    </td>
                    <td align="center" >
                        <a target="_blank" href="{{$data->url_link}}">Chi tiết</a>
                        {{--
                        <button type="button" class="btn btn-info" title="Coppy link" onclick="coppy('{{$data->url_link}}')">
                            <i class="fas fa-copy"></i>
                        </button>
                        <button type="button" class="btn btn-success" title="Xem trực tuyến" onclick="JS_Library.seeVideo('{{$data->id}}')"><i class="fas fa-eye"></i></button>
                        --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- <div class="modal" id="videomodal" role="dialog"></div> -->

<script>
function coppy(e) {
  navigator.clipboard.writeText(e);
  // Alert the copied text
  Swal.fire({
    position: 'top-start',
    icon: 'success',
    title: 'Coppy đường dẫn thành công!',
    showConfirmButton: false,
    timer: 3000
    })
}
</script>
