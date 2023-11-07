<style>
    .hiddel{
        display: none;
    }
    .show{
        display: block;
    }
	.form-control-label{
		font-size:16px !important;
	}
	..modal-header {
		display: inline;
	}
	.form-control:disabled{
		background-color:#ffffff
	}
	.label-upload {
		border: 1px solid #344767;
		color: #000 !important;
		padding: 0.5rem;
		border-radius: 0.5em;
		cursor: pointer;
	}

	/* Create a custom checkbox */
	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 25px;
		width: 25px;
		background-color: #eee;
	}
	.form-control-label{
		color:#ffffff;
	}
</style>
<link rel="stylesheet" href="../clients/css/style.css">

<form id="frmAdd_updateAcc" role="form" action="" method="POST" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" id="id" value="{{!empty($data['users']->id)?$data['users']->id:''}}">
	<div class="modal-dialog modal-lg">
		<div class="modal-content card" style="background:#5b1313db">
			<div class="modal-header">
				<!-- <h5  style="width: 90%;" class="modal-title">Nâng cấp tài khoản</h5>
				<button type="button" class="btn btn-sm btn-close-res" style="background: #f1f2f2;width: 5%;">
				<i class="fas fa-undo-alt"></i>
				</button> -->
				<div class="col-md-11 m-auto text-center py-2" style="width: 95%;">
					<center>
					<div class="row" style="background: #031f38;font-size: 1.5rem;height: 70px;border-radius: 10px;padding-top:20px;padding-botton:10px">
						<div class="col-md-10">
							<h1 style="font-size:28px;padding-left:20%;color:#ffffff;">NÂNG CẤP TÀI KHOẢN</h1>
						</div>
						<div class="col-md-2">
							<!-- <button style="background:#34a233" type="button" data-bs-dismiss="modal"> -->
								<!-- <i class="fas fa-undo-alt"></i> -->
								<i style="font-size:25px;color:#ffffff;" data-bs-dismiss="modal" class="fas fa-arrow-alt-circle-left btn-close-res"></i>
							<!-- </button> -->
						</div>
					</div>
					</center>
				</div>
			</div>
			<div class="card-body">
				<div class="row" style="padding-left: 30px;padding-right: 30px;">
				    <div class="col-md-4">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Tên</p>
							<input disabled class="form-control"  type="text" name="name" value="{{isset($data['users']->name) ? $data['users']->name : ''}}">
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Địa chỉ Email</p>
							<input disabled class="form-control" type="email" name="email" value="{{isset($data['users']->email) ? $data['users']->email : ''}}">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Ngày sinh</p>
							<input disabled class="form-control" type="date" name="dateBirth" value="{{isset($data['users']->dateBirth) ? $data['users']->dateBirth : ''}}">
						</div>
					</div>
					<div class="col-md-4 pt-3">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Số điện thoại</p>
							<input disabled class="form-control" type="text" name="phone" value="{{isset($data['users']->phone) ? $data['users']->phone : ''}}">
						</div>
					</div>
					<div class="col-md-5 pt-3">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Gói hội viên</p>
							<input disabled class="form-control" type="text" id="wrap" name="wrap" value="{{isset($data['type_vip']) ? $data['type_vip'] : ''}}">
						</div>
					</div>
					<div class="col-md-3 pt-3">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Ngày đăng ký</p>
							<input disabled class="form-control"  name="time_register" value="{{isset($data['time_register']) ? $data['time_register'] : ''}}">
						</div>
					</div>

					<div class="container-lg">
					<!-- <div class="col-md-12 m-auto text-center py-2">
						<h1 class="h5" style="color:#fff079">ĐĂNG KÝ TÀI KHOẢN HỘI VIÊN FINTOP</h1>
					</div> -->
						<div class="row px-lg-3">

							<div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
								<div class="" style="background:">
									<div class="pricing-table-body card-body text-center">
										<div class="bg-secondary" style="border-radius: 0.5em;">
											<i style="color:#ffde45;font-size: 50px;" class="pricing-table-icon display-3 bx bx-package py-3"></i>
											<h2 class="pricing-table-heading h5 semi-bold-600" style="color:white">VIP2 (3 tháng) <br><span style="color:#ffce2b;font-size: 18px;">2.500.000 VND</span></h2>
											<br>
											<div class="pricing-table-footer pt-2">
												<input type="radio" name="pack_vip">
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
								<div class="" style="background:">
									<div class="pricing-table-body card-body text-center">
										<div class="bg-secondary" style="border-radius: 0.5em;">
										<i style="color:#ffde45;font-size: 50px;" class="pricing-table-icon display-3 bx bx-package py-3"></i>
											<h2 class="pricing-table-heading h5 semi-bold-600" style="color:white">VIP2 (6 tháng) <br><span style="color:#ffce2b;font-size: 18px;">4.500.000 VND</span></h2>
											<br>
											<div class="pricing-table-footer pt-2">
												<input type="radio" name="pack_vip">
											</div>
										</div>
										
									</div>
								</div>
							</div>


							<div class="col-md-4 pt-sm-0 pt-3 px-xl-3">
								<div class="" style="background:">
									<div class="pricing-table-body card-body text-center">
										<div class="bg-secondary" style="border-radius: 0.5em;">
										<i style="color:#ffde45;font-size: 50px;" class="pricing-table-icon display-3 bx bx-package py-3"></i>
											<h2 class="pricing-table-heading h5 semi-bold-600" style="color:white">VIP2 (12 tháng) <br><span style="color:#ffce2b;font-size: 18px;">8.000.000 VND</span></h2>
											<br>
											<div class="pricing-table-footer pt-2">
												<input type="radio" name="pack_vip">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row form-group pt-4" id="div_hinhthucgiai">
                    <div class="col-md-12" >
                        <label style="color:#ffffff;font-size:20px;font-family: math;" for="">Chọn hình thức thanh toán <span class="request_star">*</span></label> <br>
                    </div>
					<!-- ngan hang -->
					<div>
				     	<input type="radio" onchange="JS_UpgradeAcc.getTypeBank(this.value)" value="BANK" name="type_bank" id="type_bank"/><span style="padding-left:5px;color:#ffffff;">Chuyển khoản ngân hàng</span><br>
					</div>
					<div id="bank" class="hiddel">
						<div class="row">
							<div class="objective col-lg-12" >
								<div style="background: #0a6a00;color: #ffaf00;font-weight: 500;padding:15px;width:100%;height:100%;border-radius:5px">
									<div class="objective-icon m-auto py-4 mb-2 mb-sm-4 shadow-lg">
									<img class="card-img " src="../clients/img/qrluatnc.jpg" alt="Card image" style="width:100%">
									</div>
									<span>Số Tài khoản: 09787127981299</span><br>
									<span>Ngân Hàng: Ngân hàng Thương mại cổ phần kỹ Thương Việt Nam (techcombank)</span><br>
									<span>Tên: Nguyễn Công Luật</span> <br>
									<span>Nội dung thanh toán:Tên khách hàng - số điện thoại</span><br>

								</div>
							</div>
						</div>
					</div>
                </div>
					<!-- <div class="col-md-6 pt-3">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Ảnh giao dịch</p>
							<input style="color:#ff7916" type="file" id="file" name="file" value="">
						</div>
					</div> -->
					{{--  Mô tả --}}
					<div class="row form-group pt-4" id="div_hinhthucgiai">
						<div class="col-md-12" >
							<label style="font-size:20px;font-family: math;color:#ffffff;" for="">Ảnh xác thực thanh toán thành công <span class="request_star">*</span></label> <br>
						</div>
					</div>
					<div class="col-md-6">
						<label style="background:#ffffff" for="upload_image" class="label-upload">Chọn ảnh</label>
						<input type="file" hidden name="upload_image" id="upload_image" onchange="readURL(this)">
						<br>
						<img id="show_img" hidden alt="Image" style="width:150px">
					</div>
				</div>
				<div class="modal-footer">
					<div id="updateVip" class="pricing-table-footer pt-5 pb-2">
						<button onclick="JS_UpgradeAcc.updateVip()" type="button" id="updateVip" class="btn rounded-pill px-4 btn-outline-light light-300" 
						style="background:#009c12;">Đăng ký</button>
					</div>
					<div class="rounded-pillpricing-table-footer pt-5 pb-2">
					    <button type="button" class="btn-close-res" style="background: #97a7a4;">Đóng</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#show_img').attr('src', e.target.result).width(150);
            };
            $("#show_img").removeAttr('hidden');

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>