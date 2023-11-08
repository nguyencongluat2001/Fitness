<style>
	.hiddel {
		display: none;
	}

	.show {
		display: block;
	}

	.form-control-label {
		font-size: 16px !important;
	}

	.modal-header {
		display: inline;
	}

	.form-control:disabled {
		background-color: #ffffff
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

<form id="frmAdd_updateAcc" role="form" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
	<div class="modal-dialog modal-lg">
		<div class="modal-content card" style="background:rgb(112, 14, 14)">
			<!-- <div class="modal-header">
				<div class="d-flex">
					<h5  style="width: 90%;color:#ffffff" class="modal-title"></h5>
					<button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-close-res" style="background: #f1f2f2;width: 5%;">
						x
					</button>
				</div>
			</div> -->
			<div class="">
				<div class="row">
					<div class="col-md-12">
						<!-- Start Pricing List -->
						<div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
							<div class="row p-2">
							<!-- <div class="d-flex">
								<h5  style="width: 90%;color:#ffffff" class="modal-title"></h5>
								<button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-close-res" style="background: #f1f2f2;width: 5%;">
									x
								</button>
							</div> -->
								<!-- <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
									<i class="display-3 bx bx-package"></i>
								</div> -->
								<div class="pricing-list-body col-md-12 align-items-center pl-3">
									<ul class="list-unstyled text-center light-300">
									<div class="d-flex" style="height:30px">
										<h5  style="width: 90%;color:#ffffff" class="modal-title"></h5>
										<button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-close-res" style="background: #f1f2f2;width: 30px;height:27px;">
											x
										</button>
									</div>
										<li class="h5 mb-0" style="color:#ffffff;font-family: emoji;">
										    <span style="font-size: 24px">FinTop đã tiếp nhận thông tin. Đăng ký của Anh/Chị sẽ được xử lý và nâng cấp gói Hội viên FinTop trong thời gian sớm nhất (24h).</span> 
											<span style="font-size: 24px;">Chi tiết liên hệ Hotline</span>  
											<span style="font-size: 24px;"><b style="font-size: 24px;color:#6ee0ff">086.234.8886</b></span>  để được hỗ trợ.
										</li>
										<br>
										<li class="d-flex">
									    	<div class="py-3 col-md-3">
											</div>
											<div class="py-3 col-md-3">
												<img src="{{url('/clients/img/zalo.png')}}" alt="Image" width="70px" height="70px">
											</div>
											<div class="py-3 col-md-3">
												<img src="{{url('/clients/img/phone.png')}}" alt="Image" width="80px" height="80px">
											</div>
											<div class="py-3 col-md-3">
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Pricing List -->
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