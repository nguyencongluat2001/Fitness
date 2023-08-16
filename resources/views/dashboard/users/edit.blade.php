<form id="frmAdd" role="form" action="" method="POST" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" id="id" value="{{!empty($data['id'])?$data['id']:''}}">
	<div class="modal-dialog modal-lg">
		<div class="modal-content card">
			<div class="modal-header">
				<h5 class="modal-title">Cập nhật người dùng</h5>
				<button type="button" class="btn btn-sm" data-bs-dismiss="modal" style="background: #f1f2f2;">
					X
				</button>
			</div>
			<div class="card-body">
				<p class="text-uppercase text-sm">Thông tin cơ bản</p>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label required">Tên</p>
							<input class="form-control" type="text" value="{{!empty($data['name'])?$data['name']:''}}" name="name" id="name" placeholder="Nhập tên người dùng..." />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label required">Địa chỉ Email</p>
							<input class="form-control" type="email" value="{{!empty($data['email'])?$data['email']:''}}" name="email" id="email" placeholder="Nhập email..." />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label required">Ngày sinh</p>
							<input class="form-control" type="date" value="{{!empty($data['dateBirth'])?$data['dateBirth']:''}}" name="dateBirth" id="dateBirth" placeholder="Chọn ngày sinh..." />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label required">Số điện thoại</p>
							<input class="form-control" type="text" value="{{!empty($data['phone'])?$data['phone']:''}}" name="phone" id="phone" placeholder="Nhập số điện thoại..." />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label required">Thứ tự</p>
							<input class="form-control" type="text" value="{{!empty($data['order'])?$data['order']:''}}" name="order" id="order" placeholder="Số thứ tự..." />
						</div>
					</div>
					@if(!empty($data['email']) && $_SESSION["email"] == $data['email'] || $_SESSION["role"] == 'ADMIN')
					<span id='btn_changePass'>
						<button class="btn btn-primary btn-sm" type="button">
							Đổi mật khẩu
						</button>
					</span>
					@endif
				</div>
				<hr class="horizontal dark">
				<p class="text-uppercase text-sm">Thông tin liên lạc</p>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Địa chỉ</p>
							<input class="form-control" type="text" value="{{!empty($data['address'])?$data['address']:''}}" name="address" id="address" placeholder="Nhập địa chỉ..." />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">ID nhân sự</p>
							<input class="form-control" type="text" value="{{!empty($data['id_personnel'])?$data['id_personnel']:''}}" name="id_personnel" id="id_personnel">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Người quản lý</p>
							<select class="form-control input-sm chzn-select" name="id_manage"id="id_manage">
								@foreach($data['arr_quanly'] as $item)
								    <option value="{{$item['id_personnel']}}">{{$item['name']}} - {{$item['id_personnel']}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Công ty</p>
							<input class="form-control" type="text" value="{{!empty($data['company'])?$data['company']:''}}" name="company" id="company">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Chức vụ</p>
							<input class="form-control" type="text" value="{{!empty($data['position'])?$data['position']:''}}" name="position" id="position">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<p for="example-text-input" class="form-control-label">Gia nhập ngày</p>
							<input class="form-control" type="date" value="{{!empty($data['date_join'])?$data['date_join']:''}}" name="date_join" id="date_join">
						</div>
					</div>
				</div>
				{{-- Quyền truy cập --}}
				<div class="row form-group" id="div_hinhthucgiai">
					{{--<span class="col-md-3 control-label required">Quyền truy cập</span>
					<div class="col-md-3" style="background:#49ff99">
					     @if ($_SESSION['role_admin'] == 'ADMIN')
						<input type="checkbox" value="ADMIN" name="role_admin" id="role_admin" {{!empty($data['role_admin']) && $data['role_admin'] == 'ADMIN' ? 'checked' : ''}} />
						<label style="color:#0f0f0f" for="role_admin">Quản trị hệ thống</label> <br>
						@endif
						@if ($_SESSION['role_admin'] == 'ADMIN' || $_SESSION['role_manage'] == 'MANAGE')
						<input type="checkbox" value="Quản trị hệ thống" name="role_manage" id="role_manage" {{!empty($data['role_manage']) && $data['role_manage'] == 'MANAGE' ? 'checked' : ''}} />
						<label style="color:#0f0f0f" for="role_manage">Trợ lý CEO</label><br>
						@endif
						<input type="checkbox" value="USERS" name="role_Users" id="role_Users" {{!empty($data['role_Users']) && $data['role_Users'] == 'USERS' ? 'checked' : ''}} />
						<label style="color:#0f0f0f" for="role_Users">Người dùng</label><br>
					</div>

					@if ($_SESSION['role_admin'] == 'ADMIN' || $_SESSION['role_manage'] == 'MANAGE' || $_SESSION['role_cv_admin'] == 'CV_ADMIN')
					<div class="col-md-3" style="background: #c2fbff;">
							<input type="checkbox" value="CV_ADMIN" name="role_cv_admin" id="role_cv_admin" {{!empty($data['role_cv_admin']) && $data['role_cv_admin'] == 'CV_ADMIN' ? 'checked' : ''}} />
							<label style="color:#0f0f0f" for="role_cv_admin">CV - Admin</label><br>
							<input type="checkbox" value="CV_PRO" name="role_cv_pro" id="role_cv_pro" {{!empty($data['role_cv_pro']) && $data['role_cv_pro'] == 'CV_PRO' ? 'checked' : ''}} />
							<label style="color:#0f0f0f" for="role_cv_pro">CV - Pro</label><br>
							<input type="checkbox" value="CV_BASIC" name="role_cv_basic" id="role_cv_basic" {{!empty($data['role_cv_basic']) && $data['role_cv_basic'] == 'CV_BASIC' ? 'checked' : ''}} />
							<label style="color:#0f0f0f" for="role_cv_basic">CV - basic</label><br>
					</div>
					@endif

					@if ($_SESSION['role_admin'] == 'ADMIN' || $_SESSION['role_manage'] == 'MANAGE' || $_SESSION['role_cv_admin'] == 'CV_ADMIN' || $_SESSION['role_sale_admin'] == 'SALE_ADMIN')
					<div class="col-md-3" style="background:#ffc55b">
						<input type="checkbox" value="SALE_ADMIN" name="role_sale_admin" id="role_sale_admin" {{!empty($data['role_sale_admin']) && $data['role_sale_admin'] == 'SALE_ADMIN' ? 'checked' : ''}} />
						<label style="color:#0f0f0f" for="role_sale_admin">Sale - Admin</label><br>
						<input type="checkbox" value="SALE_BASIC" name="role_Sale" id="role_Sale" {{!empty($data['role_Sale']) && $data['role_Sale'] == 'SALE_BASIC' ? 'checked' : ''}} />
						<label style="color:#0f0f0f" for="role_Sale">Sale</label><br>
					</div>
					@endif --}}
					{{-- Quyền truy cập --}}
					<div class="row form-group">
						<span class="col-md-3 control-label required" >Quyền</span>
						<div class="col-md-8">
							@foreach($data['cate_quyen'] as $item)
								<input type="checkbox" value="{{$item['code_category']}}" name="role" id="role" {{($item['status'] == '1') ? 'checked' : ''}}/>
								<span for="code">{{$item['name_category']}}</span> <br>
							@endforeach
						</div>
					</div>
					<div class="row form-group">
						<span class="col-md-3 control-label required" >Trạng thái</span>
						<div class="col-md-8">
							<input type="checkbox" id="status" name="status" {{isset($data['status']) && $data['status'] == 1 ? 'checked' : ''}}>
							<label for="status">Hoạt động</label>
						</div>
					</div>
					<div class="modal-body">
						<div>
							<label>Chọn ảnh đại diện</label><br>
							<label for="avatar" class="label-upload">Chọn ảnh</label>
							<input hidden type="file" name="avatar" id="avatar" onchange="readURL(this)"><br>
							@if(!empty($data['avatar']))
							<img id="show_img" src="{{url('/file-image/avatar/')}}/{{$data['avatar']}}" alt="Image" style="width:150px">
							@else
							<img id="show_img" hidden alt="Image" style="width:150px">
							@endif
						</div>
					</div>
					<div class="modal-footer">
						<span id="btupdate">
							<button id='btn_create' class="btn btn-primary btn-sm" type="button">
								Cập nhật
							</button>
						</span>
						<button type="button" class="btn btn-default btn-sm" data-bs-dismiss="modal" style="background: #f1f2f2;">
							Đóng
						</button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</form>
<script src="../assets/js/croppie.js"></script>
<script src="../assets/js/croppie.min.js"></script>
<script>
	$(document).ready(function() {
		$image_crop = $('#image_demo').croppie({
			enableExif: true,
			viewport: {
				width: 200,
				height: 200,
				type: 'circle'
			},

			boundary: {
				width: 300,
				height: 300
			}
		});

		$('#upload_image').on('change', function() {
			var reader = new FileReader();
			reader.onload = function(event) {
				$image_crop.croppie('bind', {
					url: event.target.result
				})
			}
			reader.readAsDataURL(this.files[0]);
			$('#uploadimage').show();
		});

		$('.crop_image').click(function(event) {
			$image_crop.croppie('result', {
				type: 'canvas',
				size: 'viewport'
			}).then(function(response) {
				console.log(1, $image_crop)
			});
		})
	})
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
			$('#show_img').attr('src', e.target.result).width(150);
			};
			$("#show_img").removeAttr('hidden');

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>