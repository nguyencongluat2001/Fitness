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
		<div class="modal-content card" style="background:#5b1313db">
			<div class="modal-header">
				<div class="d-flex">
					<h5  style="width: 90%;color:#ffffff" class="modal-title">Liên hệ</h5>
					<button type="button" class="btn btn-sm btn-close-res" style="background: #f1f2f2;width: 5%;">
						<i class="fas fa-reply"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6 offset-3">
						<!-- Start Pricing List -->
						<div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
							<div class="row p-2">
								<!-- <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
									<i class="display-3 bx bx-package"></i>
								</div> -->
								<div class="pricing-list-body col-md-12 align-items-center pl-3">
									<ul class="list-unstyled text-center light-300">
										<li class="h5 mb-0" style="color:#ffffff">
											<span style="font-size: 1.25rem;">Liên hệ</span> Hotline
											<span style="font-size: 1.25rem;"><b style="font-size: 1.25rem;color:#6ee0ff">086.234.8886</b></span> 
											<span style="font-size: 1.25rem;"> hoặc Zalo Chat <a style="font-size: 1.25rem;color:#fff079">FinTop</a> để được hỗ trợ tư vấn.</span>
										</li>
										<br>
										<li class="d-flex">
											<div class="py-3 col-md-6">
												<img src="{{url('/clients/img/zalo.png')}}" alt="Image" width="100px" height="100px">
											</div>
											<div class="py-3 col-md-6">
												<img src="{{url('/clients/img/phone.png')}}" alt="Image" width="110px" height="110px">
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Pricing List -->
					</div>
					<div hidden class="col-md-6">
						<!-- Start Pricing List -->
						<div class="pricing-list shadow-sm rounded-top rounded-3 py-sm-0 py-5">
							<div class="row p-2">
								<!-- <div class="pricing-list-icon col-3 text-center m-auto text-secondary ml-5 py-2">
									<i class="display-3 bx bx-package"></i>
								</div> -->
								<div class="pricing-list-body col-md-12 align-items-center pl-3">
									<ul class="list-unstyled text-center light-300">
										<li class="h5 semi-bold-600 mb-0">Liên hệ qua số điện thoại</li>
										<li>Hotline 086.234.8886</li>
										<div class="py-3">
											<img src="{{url('/clients/img/phone.png')}}" alt="Image" style="height: 195px;width: 195px;">
										</div>
									</ul>
								</div>
								<div class="pricing-list-footer text-center m-auto align-items-center">
									<br>
									<a class="btn rounded-pill px-4 btn-primary light-300" style="background:#247030">Gọi</a>
								</div>
							</div>
						</div>
						<!-- End Pricing List -->
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="rounded-pillpricing-table-footer">
					<button type="button" class="btn-close-res" style="background: aliceblue; color: #b20000;">Đóng</button>
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