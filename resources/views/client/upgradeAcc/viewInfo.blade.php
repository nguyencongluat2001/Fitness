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
			<div class="col-md-12 m-auto text-center py-2">
			    <h1 class="h5" style="color:#dc0000">ĐẶC QUYỀN HỘI VIÊN</h1>
			</div>
			@if($data['type_vip'] == 'TIEU_CHUAN')
			<div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden bg-white">
                <div class="pricing-horizontal-icon col-md-4 text-center bg-secondary text-info py-4">
                    <i class="display-1 bx bx-package pt-4"></i>
                    <h5 class="h5 pb-4">Hội viên tiêu chuẩn</h5>
                </div>
                <div class="pricing-horizontal-body col-md-8 text-light col-lg-7 d-flex align-items-center pt-4 pb-4">
                    <ul class="text-left list-unstyled mb-0">
						<li><i class="bx bxs-circle me-2"></i>Tra cứu cổ phiếu</li>
						<li><i class="bx bxs-circle me-2"></i>Phân tích đầu tư cơ bản</li>
						<li><i class="bx bxs-circle me-2"></i>Tham gia Cộng đồng chia sẻ đầu tư FinTop</li>
						<li><i class="bx bxs-circle me-2"></i>Tài liệu, cẩm nang hướng dẫn đầu tư</li>
                    </ul>
                </div>
            </div>
			<div class="card-body">
				<div class="row">
				    <div class="col-md-6">
						<!-- Start Pricing List -->
						<div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
							<div class="row p-2">
								<!-- <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
									<i class="display-3 bx bx-package"></i>
								</div> -->
								<div class="pricing-list-body col-md-12 align-items-center pl-3">
									<ul class="list-unstyled text-center light-300">
										<li class="h5 semi-bold-600 mb-0">Bước 1</li>
										<br>
										<li>Đăng ký tài khoản hội viên FinTop.</li>
									</ul>
								</div>
								<div class="pricing-list-footer  text-center m-auto align-items-center">
									<br>
									<a href="register" class="btn rounded-pill px-4 btn-primary light-300" style="background:#387a00">ĐĂNG KÝ</a>
								</div>
							</div>
						</div>
						<!-- End Pricing List -->
					</div>
					<div class="col-md-6">
						<!-- Start Pricing List -->
						<div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
							<div class="row p-2">
								<!-- <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
									<i class="display-3 bx bx-package"></i>
								</div> -->
								<div class="pricing-list-body col-md-12 align-items-center pl-3">
									<ul class="list-unstyled text-center light-300">
										<li class="h5 semi-bold-600 mb-0">Bước 2</li>
										<br>
										<li>Đăng nhập và truy cập miễn phí</li>
									</ul>
								</div>
								<div class="pricing-list-footer text-center m-auto align-items-center">
									<br>
									<a href="login" class="btn rounded-pill px-4 btn-primary light-300" style="background:#387a00">ĐĂNG NHẬP</a>
								</div>
							</div>
						</div>
						<!-- End Pricing List -->
					</div>
                </div>
				@endif
				@if($data['type_vip'] == 'VIP1')
				<div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden bg-white">
					<div class="pricing-horizontal-icon col-md-4 text-center bg-secondary text-light py-4">
						<i class="display-1 bx bx-package pt-4"></i>
						<h5 class="h5 pb-4">Hội viên VIP 1 (Bạc)</h5>
					</div>
					<div class="pricing-horizontal-body col-md-8 text-light col-lg-7 d-flex align-items-center pt-4 pb-4">
						<ul class="text-left list-unstyled mb-0">
							<li><i class="bx bxs-circle me-2"></i>Tra cứu cổ phiếu</li>
							<li><i class="bx bxs-circle me-2"></i>Phân tích đầu tư cơ bản</li>
							<li><i class="bx bxs-circle me-2"></i>Tham gia Cộng đồng chia sẻ đầu tư FinTop</li>
							<li><i class="bx bxs-circle me-2"></i>Tài liệu, cẩm nang hướng dẫn đầu tư</li>
							<li><i class="bx bxs-circle me-2"></i>Tín hiệu mua FinTop</li>
							<li><i class="bx bxs-circle me-2"></i>Phân tích đầu tư V.I.P</li>
							<li><i class="bx bxs-circle me-2"></i>Danh mục đầu tư V.I.P FinTop</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<!-- Start Pricing List -->
							<div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
								<div class="row p-2">
									<!-- <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
										<i class="display-3 bx bx-package"></i>
									</div> -->
									<div class="pricing-list-body col-md-12 align-items-center pl-3">
										<ul class="list-unstyled text-center light-300">
											<li class="h5 semi-bold-600 mb-0">Phương thức 1</li>
											<br>
											<li>Đăng ký tham gia gói thành viên VIP1 sử dụng cho Hội viên Bạc FinTop.</li>
										</ul>
									</div>
									<div class="pricing-list-footer text-center m-auto align-items-center">
										<br>
										<a onclick="JS_UpgradeAcc.viewForm('VIP1')" class="btn rounded-pill px-4 btn-primary light-300" style="background:#387a00">ĐĂNG KÝ</a>
									</div>
								</div>
							</div>
							<!-- End Pricing List -->
						</div>
						<div class="col-md-6">
							<!-- Start Pricing List -->
							<div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
								<div class="row p-2">
									<!-- <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
										<i class="display-3 bx bx-package"></i>
									</div> -->
									<div class="pricing-list-body col-md-12 align-items-center pl-3">
										<ul class="list-unstyled text-center light-300">
											<li class="h5 semi-bold-600 mb-0">Phương thức 2</li>
											<br>
											<li>Trở thành khách hàng dối tác, chuyển/mở TKCK gắn ID FinTop Team quản lý</li>
										</ul>
									</div>
									<div class="pricing-list-footer text-center m-auto align-items-center">
										<br>
										<a onclick="JS_UpgradeAcc.viewFormContact()" class="btn rounded-pill px-4 btn-primary light-300" style="background:#ffb638">LIÊN HỆ</a>
									</div>
								</div>
							</div>
							<!-- End Pricing List -->
						</div>
					</div>
					@endif
					@if($data['type_vip'] == 'VIP2')
					<div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden bg-white">
						<div class="pricing-horizontal-icon col-md-4 text-center bg-secondary text-warning py-4">
							<i class="display-1 bx bx-package pt-4"></i>
							<h5 class="h5 pb-4">Hội viên VIP 2 (Vàng)</h5>
						</div>
						<div class="pricing-horizontal-body col-md-8 text-light col-lg-7 d-flex align-items-center pt-4 pb-4">
							<ul class="text-left list-unstyled mb-0">
								<li><i class="bx bxs-circle me-2"></i>Tra cứu cổ phiếu</li>
								<li><i class="bx bxs-circle me-2"></i>Phân tích đầu tư cơ bản</li>
								<li><i class="bx bxs-circle me-2"></i>Tham gia Cộng đồng chia sẻ đầu tư FinTop</li>
								<li><i class="bx bxs-circle me-2"></i>Tài liệu, cẩm nang hướng dẫn đầu tư</li>
								<li><i class="bx bxs-circle me-2"></i>Tín hiệu mua FinTop</li>
								<li><i class="bx bxs-circle me-2"></i>Phân tích đầu tư V.I.P</li>
								<li><i class="bx bxs-circle me-2"></i>Danh mục đầu tư V.I.P FinTop</li>
								<li><i class="bx bxs-circle me-2"></i>Khuyến nghị đầu tư V.I.P FinTop</li>
							</ul>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<!-- Start Pricing List -->
								<div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
									<div class="row p-2">
										<!-- <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
											<i class="display-3 bx bx-package"></i>
										</div> -->
										<div class="pricing-list-body col-md-12 align-items-center pl-3">
											<ul class="list-unstyled text-center light-300">
												<li class="h5 semi-bold-600 mb-0">Phương thức 1</li>
												<br>
												<li>Đăng ký tham gia gói thành viên VIP2 sử dụng cho Hội viên Vàng FinTop.</li>
											</ul>
										</div>
										<div class="pricing-list-footer text-center m-auto align-items-center">
											<br>
											<a  onclick="JS_UpgradeAcc.viewForm('VIP2')" class="btn rounded-pill px-4 btn-primary light-300" style="background:#387a00">ĐĂNG KÝ</a>
										</div>
									</div>
								</div>
								<!-- End Pricing List -->
							</div>
							<div class="col-md-6">
								<!-- Start Pricing List -->
								<div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
									<div class="row p-2">
										<!-- <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
											<i class="display-3 bx bx-package"></i>
										</div> -->
										<div class="pricing-list-body col-md-12 align-items-center pl-3">
											<ul class="list-unstyled text-center light-300">
												<li class="h5 semi-bold-600 mb-0">Phương thức 2</li>
												<br>
												<li>Trở thành khách hàng dối tác, chuyển/mở TKCK gắn ID FinTop Team quản lý</li>
											</ul>
										</div>
										<div class="pricing-list-footer text-center m-auto align-items-center">
											<br>
											<a onclick="JS_UpgradeAcc.viewFormContact()" class="btn rounded-pill px-4 btn-primary light-300" style="background:#ffb638">LIÊN HỆ</a>
										</div>
									</div>
								</div>
								<!-- End Pricing List -->
							</div>
						</div>
						@endif
						@if($data['type_vip'] == 'KIM_CUONG')
					<div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden bg-white">
						<div class="pricing-horizontal-icon col-md-12 text-center bg-secondary text-warning py-4">
							<!-- <i class="display-1 bx bx-package pt-4"></i> -->
							<div class="py-3">
							    <img   src="{{url('/clients/img/diamond.png')}}" alt="Image" style="height: 95px;width: 95px;">
							</div>
							<h5 class="h5 pb-4">Hội viên Kim cương</h5>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<!-- Start Pricing List -->
								<div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
									<div class="row p-2">
										<!-- <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
											<i class="display-3 bx bx-package"></i>
										</div> -->
										<div class="pricing-list-body col-md-12 align-items-center pl-3">
											<ul class="list-unstyled text-center light-300">
												<br>
												<li>Gói hỗ trợ VIP PRO đặc biệt dành riêng cho khách hàng đối tác FinTop.Hội viên Kim Cương với NAV đầu tư từ 1 tỷ VND, cố vấn chiến lược 1-1 cùng Chuyên gia FinTop, tư vấn danh mục cổ phiếu, nắm bắt cơ hội đầu tư, quản trị rủi ro.</li>
											</ul>
										</div>
										<div class="pricing-list-footer text-center m-auto align-items-center">
											<br>
											<a onclick="JS_UpgradeAcc.viewFormContact()" class="btn rounded-pill px-4 btn-primary light-300" style="background:#387a00">LIÊN HỆ</a>
										</div>
									</div>
								</div>
								<!-- End Pricing List -->
							</div>
						</div>
						@endif
			    </div>
			<div class="modal-footer">
				<div class="rounded-pillpricing-table-footer pt-5 pb-2">
					<button type="button" data-bs-dismiss="modal" style="background: #97a7a4;">Đóng</button>
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