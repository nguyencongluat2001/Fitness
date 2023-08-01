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
</style>
<link rel="stylesheet" href="../clients/css/style.css">

<form id="frmAdd_updateAcc" role="form" action="" method="POST" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" id="id" value="{{!empty($data['users']->id)?$data['users']->id:''}}">
	<div class="modal-dialog modal-lg">
		<div class="modal-content card">
			<div class="modal-header">
				<h5  style="width: 90%;" class="modal-title">Nâng cấp tài khoản</h5>
				<button type="button" class="btn btn-sm" data-bs-dismiss="modal" style="background: #f1f2f2;width: 5%;">
					X
				</button>
			</div>
			<div class="card-body">
				<div class="row">
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
							<p for="example-text-input" class="form-control-label">Gói đăng ký</p>
							<input disabled class="form-control" type="text" id="wrap" name="wrap" value="VIP1">
						</div>
					</div>
					<div class="col-md-3 pt-3">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Ngày đăng ký</p>
							<input disabled class="form-control"  name="time_register" value="{{isset($data['time_register']) ? $data['time_register'] : ''}}">
						</div>
					</div>
					<div class="row form-group pt-4" id="div_hinhthucgiai">
                    <div class="col-md-12" >
                        <label style="font-size:20px;font-family: math;" for="">Chọn hình thức thanh toán <span class="request_star">*</span></label> <br>
                    </div>
					<!-- ngan hang -->
					<div>
				     	<input type="radio" onchange="JS_UpgradeAcc.getTypeBank(this.value)" value="BANK" name="type_bank" id="type_bank"/><span style="padding-left:5px">Chuyển khoản ngân hàng</span><br>
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
				    <!-- momo -->
					<div>
				     	<input  type="radio" onchange="JS_UpgradeAcc.getTypeBank('momo')" value="MOMO" name="type_bank" id="type_bank"/><span style="padding-left:5px" >Thanh toán ví điện tử MoMo</span>
					</div>
					<div id="momo" class="hiddel">
						<div class="row">
							<div class="objective col-lg-12" >
								<div style="background: #e00085d9;color: #ffffff;font-weight: 500;padding:15px;width:100%;height:100%;border-radius:5px">
									<div class="objective-icon m-auto py-4 mb-2 mb-sm-4 shadow-lg">
									<img class="card-img " src="../clients/img/qrluatnc.jpg" alt="Card image" style="width:100%">
									</div>
									<span>Số MoMo: 0987276762</span><br>
									<span>Tên chủ Tài khoản: Công ty Cổ phần đầu tư và phát triển FinTop</span><br>
									<span>Nội dung thanh toán:Tên khách hàng - số điện thoại</span><br>
								</div>
							</div>
						</div>
					</div>
                </div>
					<div class="col-md-6 pt-3">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Ảnh giao dịch</p>
							<input style="color:#ff7916" type="file" id="file" name="file" value="">
						</div>
					</div>
					<div class="pt-5">
					   <h4>Quý khách hàng đăng ký nâng cấp tài khoản thực hiện theo các bước sau:</h4>
					    <p style="background:#ffeda7;color:#000000;padding:1%;border-radius:5px" class="light-300">
							<span>Bước 1: Quét mã QR ví momo hoặc QR ngân hàng.</span> <br>
							<span>Bước 2: Ghi rõ nội dung chuyển khoản (Tên khách hàng đăng ký - Email đăng ký - Số điện thoại đăng ký) </span> <br>
							<span>Bước 3: Chụp thông màn hình giao dịch thành công.</span> <br>
							<span>Bước 4: Tải ảnh vừa chụp lên ô tải ảnh giao dịch.</span> <br>
							<span>Bước 5: Nhấn nút đăng ký cuối cùng.</span> <br>
							<span>Bước 6: Nhân viên FinTop sẽ xác nhận và gửi thông báo thành công hoặc thất bại qua Email đăng ký của bạn.</span> <br>
							<span>Bước 7: Xác nhận thành công -> Đăng xuất phần mềm -> đăng nhập lại.</span> <br>
							<span>Chúc quý khách hàng có một trải nghiệm thú vị về thị trường - cổ phiếu.</span> <br>
						</p>
					</div>
				</div>
				<div class="modal-footer">
					<div id="updateVip" class="pricing-table-footer pt-5 pb-2">
						<button onclick="JS_UpgradeAcc.updateVip()" type="button" id="updateVip" class="btn rounded-pill px-4 btn-outline-light light-300" 
						style="background:#00a313;color:#007b14;animation: lights 2s 750ms linear infinite;">Đăng ký</button>
					</div>
					<div class="rounded-pillpricing-table-footer pt-5 pb-2">
					    <button type="button" data-bs-dismiss="modal" style="background: #7c0000;">Đóng</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
