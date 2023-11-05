function JS_UpgradeAcc(baseUrl, module, controller) {
    this.module = module;
    this.baseUrl = baseUrl;
    this.controller = controller;
    NclLib.menuActive('.link-privileges');
    NclLib.loadding();
    this.urlPath = baseUrl + '/' + module + '/' + controller;
}
/**
 * Hàm load các sử kiện cho màn hình index
 *
 * @return void
 */
JS_UpgradeAcc.prototype.loadIndex = function () {
    var myClass = this;
    var oForm = 'form#frmAdd_updateAcc';
    $(oForm).find('#updateVip').click(function () {
        myClass.updateVip(oForm);
    });
    myClass.loadevent(oForm);
}
JS_UpgradeAcc.prototype.loadevent = function (oForm) {
    var myClass = this;
    $('form#frmAdd_updateAcc').find('#updateVip').click(function () {
        myClass.updateVip(oForm);
    });
   
}
/**
 * Hàm hiển thị modal
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_UpgradeAcc.prototype.viewForm = function (vip) {
    var url = this.urlPath + '/viewForm';
    var myClass = this;
    NclLib.loadding();
    // var data = 'id=' + id;
    var data = 'vip=' + vip;
    $.ajax({
        url: url,
        type: "GET",
        //cache: true,
        data: data,
        success: function (arrResult) {
            if(arrResult.status == 2){
                Swal.fire({
                    position: 'top-start',
                    // icon: 'warning',
                    title: arrResult.message,
                    showConfirmButton: false,
                    timer: 3000
                  })
                return false;
            }else{
                $('#formmodal').html(arrResult);
                $('#formmodal').modal('show');
            }
        }
    });
}
/**
 * Hàm hiển thị modal
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_UpgradeAcc.prototype.viewInfo = function (vip) {
    var url = this.urlPath + '/viewInfo';
    var myClass = this;
    NclLib.loadding();
    // var data = 'id=' + id;
    var data = 'vip=' + vip;
    $.ajax({
        url: url,
        type: "GET",
        //cache: true,
        data: data,
        success: function (arrResult) {
            if(arrResult.status == 2){
                Swal.fire({
                    position: 'top-start',
                    // icon: 'warning',
                    title: arrResult.message,
                    showConfirmButton: false,
                    timer: 3000
                  })
                return false;
            }else{
                $('#formmodal').html(arrResult);
                $('#formmodal').modal('show');
            }
        }
    });
}
/**
 * Hàm hiển thị modal
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_UpgradeAcc.prototype.viewFormContact = function () {
    var url = this.urlPath + '/viewFormContact';
    var myClass = this;
    NclLib.loadding();
    var data = '';
    $.ajax({
        url: url,
        type: "GET",
        //cache: true,
        data: data,
        success: function (arrResult) {
            if(arrResult.status == 2){
                Swal.fire({
                    position: 'top-start',
                    // icon: 'warning',
                    title: arrResult.message,
                    showConfirmButton: false,
                    timer: 3000
                  })
                return false;
            }else{
                $('#formmodal').html(arrResult);
                $('#formmodal').modal('show');
            }
        }
    });
}
/**
 * Hàm hiển thêm mới
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_UpgradeAcc.prototype.updateVip = function (oForm) {
    var url = this.urlPath + '/updateVip';
    var myClass = this;
    NclLib.loadding();
    var formdata = new FormData();
    if(this.type_bank == '' || this.type_bank == undefined){
        Swal.fire({
            position: 'top-start',
            icon: 'warning',
            title: 'Chưa chọn hình thức thanh toán!',
            showConfirmButton: false,
            timer: 3000
          })
        return false;
    }
    formdata.append('_token', $("#_token").val());
    formdata.append('id_user', $("#id").val());
    formdata.append('wrap', $("#wrap").val());
    formdata.append('type_payment', this.type_bank);
    $('form#frmAdd_updateAcc input[type=file]').each(function () {
        var count = $(this)[0].files.length;
        for (var i = 0; i < count; i++) {
            formdata.append('file-attack-' + i, $(this)[0].files[i]);
        }
    });

    $.ajax({
        url: url,
        type: "POST",
        data: formdata,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function (arrResult) {
            if (arrResult['success'] == true) {
                  Swal.fire({
                    position: 'top-start',
                    icon: 'success',
                    title: 'Gửi yêu cầu phê duyệt thành công!, vui lòng chờ phê duyệt từ FinTop.',
                    showConfirmButton: false,
                    timer: 5000
                  })
                  $('#formmodal').modal('hide');
                //   myClass.loadList(oForm);

            } else {
                Swal.fire({
                    position: 'top-start',
                    icon: 'warning',
                    title: arrResult['message'],
                    showConfirmButton: false,
                    timer: 3000
                  })
            }
        }
    });
}
/**
 * Hàm hiển thị phuong thuc thanh toan
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_UpgradeAcc.prototype.getTypeBank = function (type) {
    if(type=='BANK'){
        $('#bank').removeClass("hiddel");
        $('#momo').removeClass("show");
        $('#momo').addClass("hiddel");
        $('#bank').addClass("show");
    }
    else{
        $('#momo').removeClass("hiddel");
        $('#bank').removeClass("show");
        $('#bank').addClass("hiddel");
        $('#momo').addClass("show");
    }
    this.type_bank = type;
}