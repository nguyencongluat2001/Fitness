function JS_CategoryFintop(baseUrl, module, controller) {
    this.module = module;
    this.baseUrl = baseUrl;
    this.controller = controller;
    NclLib.menuActive('.link-datafinancial');
    NclLib.loadding();
    this.urlPath = baseUrl + '/' + module + '/' + controller;
}
/**
 * Hàm load các sử kiện cho màn hình index
 *
 * @return void
 */
JS_CategoryFintop.prototype.loadIndex = function () {
    var myClass = this;
    NclLib.menuActive('.link-categoryFintopIndex');
    NclLib.menuActive_child('.link-categoryFintopIndex');
    var oForm = 'form#frmLoadlist_categoryFintop';
    myClass.loadList_vip(oForm);
    myClass.loadList_basic(oForm);
}
/**
 * Load màn hình danh sách danh mục khuyến nghị vip
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_CategoryFintop.prototype.loadList_vip = function (oForm) {
    var myClass = this;
    var url = this.urlPath + '/loadList_categoryFintop_vip';
    var data = $(oForm).serialize();
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (arrResult) {
            $("#table-container-categoryFintop_vip").html(arrResult);
        }
    });
}
/**
 * Load màn hình danh sách hiệu quả
 *
 * @param oForm (tên form)
 *
 * @return void
 */
JS_CategoryFintop.prototype.loadList_basic = function (oForm) {
    var myClass = this;
    var url = this.urlPath + '/loadList_categoryFintop_basic';
    var data = $(oForm).serialize();
    $.ajax({
        url: url,
        type: "POST",
        data: data,
        success: function (arrResult) {
            $("#table-container-categoryFintop_basic").html(arrResult);
        }
    });
}
JS_CategoryFintop.prototype.checkLogin = function(){
    Swal.fire({
        title: 'Đăng ký để xem danh mục khuyến nghị vip!',
        showCloseButton: true,
        confirmButtonText: "Đăng nhập",
        confirmButtonColor: "rgb(31 140 64)",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace('/client/upgradeAcc/index');
        }
    })
    $(".swal2-modal").css('background-color', 'rgb(112 14 14 / 83%)');
    $(".swal2-modal").css('color', '#ffffff');
    $(".swal2-modal").css('font-size', '15px');
    $(".swal2-modal").css('font-family', 'FontAwesome');
}