@extends('client.layouts.index')
@section('body-client')
<link rel="stylesheet" href="{{ asset('clients/css/introduce.css') }}">
<style>
    .img-fluid {
        max-width: 70%;
        margin-left: 15%;
    }

    .name_cg {
        font-weight: 600;
        font-size: 16px;
    }
</style>
<section class="container">
    <div class=" pb-3 d-lg-flex gx-5">
        <div class="col-lg-12">
            <form action="" method="GET" id="frmLoadlist_signal">
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                <div class="home_index_vnindex pt-1 pb-3" style="background:#b56c6cb5 !important;border-radius:0px !important">
                    <!-- phần giới thiệu FIn top -->
                    <div class="home_index_child" style="background:#fffffff2  !important;">
                        <div class="col-lg-12" style="padding:10px;">
                            <h1 class="h5">I. GIỚI THIỆU CHUNG</h1>
                            <div class="row d-flex">
                                <div class="col-lg-7 text-start">
                                    <div style="text-align: justify;">
                                        <p class="light-300">
                                            &nbsp;&nbsp;&nbsp;<span class="name_cg">FinTop</span> - Đội ngũ Chuyên gia trẻ 5 đến hơn 10 năm kinh nghiệm đầu tư thực chiến trên thị trường Tài chính - Chứng khoán, cố vấn đầu tư và quản lý tài sản cho hơn 5000+ khách hàng đối tác tại các công ty chứng khoán hàng đầu Việt Nam: VPS, SSI, VND, HSC, MBS,...(Video Youtube giới thiệu:<a rel="nofollow" href="https://youtu.be/V4PdhYmfQ_8 " target="_blank">https://youtu.be/V4PdhYmfQ_8 </a> )
                                        </p>
                                        <p class="light-300">&nbsp;&nbsp;&nbsp;<span class="name_cg">FinTop</span> - Đội ngũ khát vọng, không ngừng học hỏi vươn lên, không ngừng sáng tạo, nghiên cứu, nâng cao năng lực để tạo nên giá trị, mang đến sản phẩm chuyên môn và chia sẻ cơ hội cùng khách hàng đối tác.</p>
                                        <p class="light-300">&nbsp;&nbsp;&nbsp;Với sự hỗ trợ tư vấn tận tâm 1-1, Đội ngũ FinTop sẽ đồng hành với nhà đầu tư từng bước đi trên con đường chinh phục sự thịnh vượng về tài chính. Chúng tôi tin rằng với sự nỗ lực không ngừng nghỉ, đam mê, nhiệt huyệt, đặc biệt sự đồng hành, tin tưởng và ủng hộ của Quý KH đối tác sẽ giúp Đội ngũ tiếp tục phát triển mạnh mẽ, tạo ra nhiều giá trị hơn nữa cho cộng đồng.</p>
                                    </div>
                                    <p class="text-center"><i>“FinTop, kiến tạo danh mục đầu tư bền vững. <br>
                                            FinTop, đầu tư mãi đỉnh.”</i>
                                    </p>
                                </div>
                                <div class="col-lg-5 ">
                                    <img style="height:100%; width: 100%;object-fit: cover;" src="./assets/img/bgFInTop.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mkkmkmkmmkmkmkmmkk"> <!-- menu  -->
                        <div id="wrapper" align="center">
                            <div id="root-left">
                                <div class="branch-inverse l1">
                                    <div class="entry-inverse"><a href="{{ url('client/datafinancial/index') }}"><span class="label-inverse text-start">TRA CỨU XU HƯỚNG CỔ PHIẾU</span></a></div>
                                    <div class="entry-inverse"><a href="{{ url('client/datafinancial/signalIndex') }}"><span class="label-inverse text-start">TÍN HIỆU MUA FINTOP</span></a></div>
                                    <div class="entry-inverse"><a href="{{ url('client/datafinancial/recommendationsIndex') }}"><span class="label-inverse text-start">KHUYẾN NGHỊ ĐẦU TU V.I.P</span></a></div>
                                    <div class="entry-inverse"><a href="{{ url('client/about/index') }}"><span class="label-inverse text-start">BÁO CÁO PHÂN TÍCH FINTOP</span></a></div>
                                    <div class="entry-inverse"><a href="{{ url('') }}"><span class="label-inverse text-start">CỐ VẤN 1 - 1 TỪ CHUYÊN GIA FINTOP</span></a></div>
                                </div>
                            </div>
                            <div id="main-root"><span class="label">FINTOP.DATA - DỮ LIỆU CHO NHÀ ĐẦU TƯ</span></div>
                        </div>
                    </div>
                    <!-- team tư vấn đầu tư  -->
                    <div class="home_index_child" style="background:#fffffff2  !important;">
                        <div class="col-lg-12" style="padding:10px;">
                            <div class="col-lg-6 text-start">
                                <h1 class="h5 pb-5">II. ĐỘI NGŨ CHUYÊN GIA FINTOP</h1>
                            </div>

                            <div class="pt-2 py-5 pb-3 d-lg-flex align-items-center gx-5" style="padding:10%">
                                <!-- <div class="col-lg-3">
                                <h2 class="h2 py-5 typo-space-line">Cố vấn đầu tư</h2>
                                <p class="text-muted light-300">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div> -->
                                <div class="col-lg-12 row align-items-center">
                                    <div class="team-member col-md-4">
                                        <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/team-03.jpg" alt="Card image">
                                        <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                            <li class="name_cg"> (Ông) Lê Văn Long</li>
                                            <li>Chuyên gia phân tích - Giám đốc tư vấn đầu tư</li>
                                            <li>Công ty cổ phần chứng khoán VPS</li>
                                        </ul>
                                    </div>
                                    <div style="padding-bottom: 10%;" class="team-member col-md-4">
                                        <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/team-03.jpg" alt="Card image">
                                        <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                            <li class="name_cg">(Ông) Nguyễn Đình Hải</li>
                                            <li>Chief executive officier (CEO) & Founder FinTop</li>
                                            <li>Dữ liệu chứng khoán FinTop.data</li>
                                        </ul>
                                    </div>
                                    <div class="team-member col-md-4">
                                        <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/team-03.jpg" alt="Card image">
                                        <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                            <li class="name_cg">(Ông) Nguyễn Mạnh Tuấn</li>
                                            <li>Chief executive officier (CEO) & Founder FinTop</li>
                                            <li>Dữ liệu chứng khoán FinTop.data</li>
                                        </ul>
                                    </div>
                                    <div class="team-member col-md-4">
                                        <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/team-03.jpg" alt="Card image">
                                        <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                            <li class="name_cg">(Ông) Trần Khánh Linh</li>
                                            <li>Chuyên gia phân tích</li>
                                            <li>Cán bộ đào tạo & phát triển</li>
                                            <li>Năng lực tư vấn đầu tư FinTop</li>
                                        </ul>
                                    </div>
                                    <div class="team-member col-md-4">
                                        <!-- <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/team-02.jpg" alt="Card image"> -->
                                        <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                            <!-- <li>(Đội ngũ Chuyên gia FinTop)</li> -->
                                        </ul>
                                    </div>
                                    <div class="team-member col-md-4">
                                        <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/team-02.jpg" alt="Card image">
                                        <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                            <li class="name_cg">(Bà) Nguyễn Minh Hạnh</li>
                                            <li>Master of Science Economics and Strategy</li>
                                            <li>(FSU JENA ,Germany)</li>
                                            <li>Chuyên gia phân tích & cố vấn đầu tư FinTop</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home_index_child" style="background:#ffffff1f  !important;">
                        <div class="col-lg-12" style="padding:10px;">
                            <div class="container my-4">
                                <div class="row text-center">

                                    <div class="objective col-lg-4">
                                        <div style="background:#f6fff3;padding:15px;width:100%;height:100%;border-radius:5px">
                                            <div class="objective-icon m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                                                <i class="fab fa-wpexplorer text-light fa-3x"></i>
                                            </div>
                                            <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Tầm nhìn</h2>
                                            <p class="light-300">
                                                &nbsp;&nbsp;&nbsp; FinTop trở thành trung tâm Nghiên cứu -Phân Tích - Phát triển Dữ liệu đầu tư .Đội ngũ FinTop sẽ trở thành đối tác tin cậy,cố vấn đầu tư cho các Nhà Đầu Tư cá nhân và Tổ chức.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="objective col-lg-4 mt-sm-0 mt-4">
                                        <div style="background:#b0ffec;padding:15px;width:100%;height:100%;border-radius:5px">
                                            <div class="objective-icon m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                                                <!-- <i class='display-4 bx bx-revision text-light'></i> -->
                                                <i class="fas fa-hand-holding-usd text-light fa-3x"></i>
                                            </div>
                                            <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Sứ mệnh</h2>
                                            <p class="light-300">
                                                &nbsp;&nbsp;&nbsp; đến nguồn thông tin, dữ liệu đầu tư hữu ích, tinh gọn, hiệu quả,cùng Nhà Đầu Tư xây dựng lộ trình,chiến lược đầu tư hướng đến mục tiêu tự do và thịnh vượng về tài chính.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="objective col-lg-4 mt-sm-0 mt-4">
                                        <div style="background:#adff8a;padding:15px;width:100%;height:100%;border-radius:5px">
                                            <div class="objective-icon m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                                                <i class="fas fa-database text-light fa-3x"></i>
                                            </div>
                                            <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Giá trị cốt lõi</h2>
                                            <p class="light-300">
                                                Tận tâm - Chuyên Nghiệp Chủ động - Sáng Tạo Tinh gọn - Hiệu ủa
                                            </p>
                                        </div>
                                    </div>
                                    <div class="pt-5">
                                        <p style="background:#3b486a;color:white;padding:5%;border-radius:5px" class="light-300 pt-5">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sau nhiều năm nghiên cứu và phát triển, 18 tháng 01 năm 2022, FinTop chính thức được thành lập.
                                            Đội ngũ Chuyên gia FinTop đã không
                                            ngừng nỗ lực trong việc nghiên cứu thị trường, phân tích dữ liệu Tài chính - Kinh tế và thấu
                                            hiểu Nhà Đầu Tư để mang lại những thông tin hữu ích, tinh gọn, chiến lược đầu tư hiệu quả, phù hợp nhất.
                                            Minh chứng cho thấy tỷ lệ chính xác cao thông qua "Tra cứu xu hướng cổ phiếu", danh mục "Tín Hiệu Mua"
                                            và "Khuyến Nghị V.I.P" mang lại hiệu quả trong đầu tư. Thành công của Nhà Đầu tư, sự tin cậy của đối tác
                                            đã mang lại cảm hứng và nguồn động lực lớn cho Đội ngũ FinTop chúng tôi tiếp tục nỗ lực, phát triển hơn nữa
                                            để mang đến những sản phẩm tốt nhất.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home_index_child" style="background:#fffffff2  !important;">
                        <div class="col-lg-12" style="padding:10px;">
                            <div class="col-lg-6 text-start">
                                <h1 class="h5 pb-3 text-uppercase">III. Khách hàng nói gì về fintop</h1>
                            </div>
                            <div class="py-2 px-3 row">
                                <div class="col-md-4">
                                    <div class="customer_reviews px-3">
                                        <div class="icon"><i class="fas fa-quote-right"></i></div>
                                        <div class="text-review pt-4 pb-3" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                        <hr>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="">
                                            <span class="ms-3 d-flex align-items-center" style="min-height: 80px;">
                                                <ul>
                                                    <li><b>(Ông) Lê Văn Long</b></li>
                                                    <li>Chuyên gia phân tích - Giám đốc tư vấn đầu tư</li>
                                                    <li>Công ty cổ phần chứng khoán VPS</li>
                                                </ul>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="customer_reviews px-3">
                                        <div class="icon"><i class="fas fa-quote-right"></i></div>
                                        <div class="text-review pt-4 pb-3" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                        <hr>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="">
                                            <span class="ms-3 d-flex align-items-center" style="min-height: 80px;">
                                                <ul>
                                                    <li><b>(Ông) Lê Văn Long</b></li>
                                                    <li>Chuyên gia phân tích - Giám đốc tư vấn đầu tư</li>
                                                    <li>Công ty cổ phần chứng khoán VPS</li>
                                                </ul>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="customer_reviews px-3">
                                        <div class="icon"><i class="fas fa-quote-right"></i></div>
                                        <div class="text-review pt-4 pb-3" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                        <hr>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="https://www.nicepng.com/png/detail/128-1280406_view-user-icon-png-user-circle-icon-png.png" alt="">
                                            <span class="ms-3 d-flex align-items-center" style="min-height: 80px;">
                                                <ul>
                                                    <li><b>(Ông) Lê Văn Long</b></li>
                                                    <li>Chuyên gia phân tích - Giám đốc tư vấn đầu tư</li>
                                                    <li>Công ty cổ phần chứng khoán VPS</li>
                                                </ul>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="../clients/js/jquery.min.js"></script>

<script>
    NclLib.menuActive('.link-introduce');
    NclLib.loadding();
</script>
@endsection