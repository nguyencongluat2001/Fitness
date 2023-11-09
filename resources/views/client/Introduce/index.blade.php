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
    .home_index_child .first,.home_index_child .three{
        margin-top: 5rem;
    }
    @media (max-width: 450px) {
        .home_index_child .offset-2{
            margin-left: 0;
        }
        .home_index_child .first,.home_index_child .three{
            margin-top: 0;
        }
    }
    .light-300{
        font-family: sans-serif;
    }
</style>
<section class="container">
    <div class=" pb-3 d-lg-flex gx-5">
        <div class="col-lg-12">
            <form action="" method="GET" id="frmLoadlist_signal">
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                <div class="home_index_vnindex pt-1 pb-3" style="background:#b56c6cb5 !important;border-radius:0px !important">
                    <!-- phần giới thiệu FIn top -->
                    <div class="home_index_child" style="background:#ffffff  !important;">
                        <div class="col-lg-12" style="padding:10px;">
                            <h1 class="h5">I. GIỚI THIỆU CHUNG</h1>
                            <div class="row d-flex">
                                <div class="col-lg-12 text-start">
                                    <div style="text-align: justify;">
                                        <p class="light-300">
                                            &nbsp;&nbsp;&nbsp;<span class="name_cg">FinTop - Đội ngũ Chuyên gia trẻ</span>  5 đến hơn 10 năm kinh nghiệm đầu tư thực chiến trên thị trường Tài chính - Chứng khoán, cố vấn đầu tư và quản lý tài sản cho hơn 5000+ khách hàng đối tác tại các công ty chứng khoán hàng đầu Việt Nam: VPS, SSI, VND, HSC, MBS,...(Video Youtube giới thiệu:<a rel="nofollow" href="https://youtu.be/V4PdhYmfQ_8 " target="_blank">https://youtu.be/V4PdhYmfQ_8 </a> )
                                        </p>
                                        <p class="light-300">&nbsp;&nbsp;&nbsp;<span class="name_cg"></span> FinTop - đội ngũ khát vọng, không ngừng học hỏi vươn lên, không ngừng sáng tạo, nghiên cứu, nâng cao năng lực để tạo nên giá trị, mang đến sản phẩm chuyên môn và chia sẻ cơ hội cùng khách hàng đối tác.</p>
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
                                        <p class="light-300">&nbsp;&nbsp;&nbsp;Với sự hỗ trợ tư vấn tận tâm 1-1, Đội ngũ FinTop sẽ đồng hành với nhà đầu tư từng bước đi trên con đường chinh phục sự thịnh vượng về tài chính. Chúng tôi tin rằng với sự nỗ lực không ngừng nghỉ, đam mê, nhiệt huyệt, đặc biệt sự đồng hành, tin tưởng và ủng hộ của Quý KH đối tác sẽ giúp Đội ngũ tiếp tục phát triển mạnh mẽ, tạo ra nhiều giá trị hơn nữa cho cộng đồng.</p>
                                    </div>
                                    <center>
                                    <div class="col-lg-7 text-start">
                                        <img style="height:100%; width: 100%;object-fit: cover;" src="./assets/img/bgFInTop.jpg">
                                    </div>
                                    </center>
                                     <br>
                                    <p class="text-center"><i>“FinTop, kiến tạo danh mục đầu tư bền vững. <br>
                                            FinTop, đầu tư mãi đỉnh.”</i>
                                    </p>
                                    <br>
                                    <h1 class="h5 pb-2 text-center">ĐỘI NGŨ CHUYÊN GIA FINTOP</h1>

                                    <div class="pt-2 py-5 pb-3 d-lg-flex align-items-center gx-5" style="padding:10%">
                                        <div class="col-lg-12 row align-items-center">
                                            <div class="team-member col-md-4 first">
                                                <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/nguyen_dinh_hai.jpg" alt="Card image">
                                                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                                    <li class="name_cg"> (Anh) Trần Khánh Linh</li>
                                                    <li>Chuyên gia Phân tích đầu tư FinTop</li>
                                                    <li>Cán bộ Đào tạo & Phát triển Năng lực TVĐT</li>
                                                </ul>
                                            </div>
                                            <div style="padding-bottom: 10%;" class="team-member col-md-4">
                                                <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/nguyen_dinh_hai.jpg" alt="Card image">
                                                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                                    <li class="name_cg">(Anh) Nguyễn Đình Hải</li>
                                                    <li>Founder & CEO FinTop Ltd.</li>
                                                    <li>Chuyên gia Phân tích Chiến lược & QTRR</li>
                                                </ul>
                                            </div>
                                            <div class="team-member col-md-4 three">
                                                <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/nguyen_dinh_hai.jpg" alt="Card image">
                                                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                                    <li class="name_cg">(Chị) Nguyễn Minh Hạnh</li>
                                                    <li>Chuyên gia Phân tích Ngành - Vĩ mô FinTop</li>
                                                    <li>Thạc sĩ Kinh tế chiến lược tại Đức (FSU JENA)</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-8 offset-2 row px-0">
                                                <div class="team-member col-md-6">
                                                    <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/nguyen_dinh_hai.jpg" alt="Card image">
                                                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                                        <li class="name_cg">(Anh) Trần Quang Huy</li>
                                                        <li>Cố vấn Đầu tư & Phân tích cổ phiếu FinTop</li>
                                                        <li>Phân tích Tài chính & Định giá Doanh nghiệp.</li>
                                                    </ul>
                                                </div>
                                                <div class="team-member col-md-6">
                                                    <img class="team-member-img img-fluid rounded-circle p-4" src="../clients/img/nguyen_dinh_hai.jpg" alt="Card image">
                                                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                                                        <li class="name_cg">(Anh) Mai Tiến Dũng</li>
                                                        <li>Cố vấn Đầu tư & Phân tích cổ phiếu FinTop</li>
                                                        <li>Thạc sĩ ... - CFA Level ...</li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="home_index_child" style="background:#ffffff  !important;">
                        <div class="col-lg-12" style="padding:10px;">
                           <div class="col-lg-6 text-start">
                                <h1 class="h5 text-uppercase">II. CÔNG TY TNHH ĐẦU TƯ VÀ PHÁT TRIỂN FINTOP</h1>
                            </div>
                            <div class="container my-4">
                                <div class="row text-center" style="color:#ffffff">

                                    <div class="objective col-lg-4">
                                        <div style="background:#0f1829;padding:15px;width:100%;height:100%;border-radius:5px">
                                            <div class="objective-icon m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                                                <i class="fab fa-wpexplorer text-light fa-3x"></i>
                                            </div>
                                            <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300" style="color:#fff079">Tầm nhìn</h2>
                                            <p class="light-300">
                                                &nbsp;&nbsp;&nbsp; FinTop trở thành trung tâm Nghiên cứu -Phân Tích - Phát triển Dữ liệu đầu tư .Đội ngũ FinTop sẽ trở thành đối tác tin cậy,cố vấn đầu tư cho các Nhà Đầu Tư cá nhân và Tổ chức.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="objective col-lg-4 mt-sm-0 mt-4">
                                        <div style="background:#0f1829;padding:15px;width:100%;height:100%;border-radius:5px">
                                            <div class="objective-icon m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                                                <!-- <i class='display-4 bx bx-revision text-light'></i> -->
                                                <i class="fas fa-hand-holding-usd text-light fa-3x"></i>
                                            </div>
                                            <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300" style="color:#fff079">Sứ mệnh</h2>
                                            <p class="light-300">
                                                &nbsp;&nbsp;&nbsp; đến nguồn thông tin, dữ liệu đầu tư hữu ích, tinh gọn, hiệu quả,cùng Nhà Đầu Tư xây dựng lộ trình,chiến lược đầu tư hướng đến mục tiêu tự do và thịnh vượng về tài chính.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="objective col-lg-4 mt-sm-0 mt-4">
                                        <div style="background:#0f1829;padding:15px;width:100%;height:100%;border-radius:5px">
                                            <div class="objective-icon m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                                                <i class="fas fa-database text-light fa-3x"></i>
                                            </div>
                                            <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300" style="color:#fff079">Giá trị cốt lõi</h2>
                                            <p class="light-300">
                                                Tận tâm - Chuyên Nghiệp Chủ động - Sáng Tạo Tinh gọn - Hiệu quả
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
                    <div class="home_index_child" style="background:#ffffff  !important">
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
    jQuery(document).ready(function() {
        const axes = [...document.querySelectorAll('.axis')];
        axes.forEach((axis, i) => {
            const angle = 360 * i / axes.length;
            axis.style.setProperty('--axis-rotation', `${angle}deg`);
            axis.querySelector('div').addEventListener('click', rotateToTop);
        })
        let rotation = -90; // change it to adjust the initial position of buttons
        updateMenuRotation(rotation);

        function updateMenuRotation(deg) {
            document.querySelector('.menu').style
                .setProperty('--menu-rotation', `${deg}deg`);
        }

        function rotateToTop(e) {
            const button = e.target;
            if (button) {
                [...document.querySelectorAll('.axis > div.active')]
                .forEach(el => el.classList.remove('active'));
                button.classList.add('active');
                rotateMenu(
                    minStepsToTop(
                        getRotation('axis', button),
                        getRotation('menu', button),
                        axes.length
                    )
                );
            }
        }

        function minStepsToTop(aR, mR, aL) {
            // aR => axisRotatin
            // mR => menuRotation
            // aL => axis.length
            // angle => 360 / aL
            // stepsFromMenu => (((mR + 360) % 360) + 90) / angle;
            // stepsFromAxis => Math.round(aR / angle);
            // totalSteps => Math.round((((mR + 360) % 360) + 90) + aR) / angle);
            const totalSteps = Math.round(((((mR + 360) % 360) + 90) + aR) * aL / 360);
            // console.log(totalSteps);
            // totalSteps as closest number to 0 (positive or negative)
            const maxAbsoluteSteps = Math.floor(aL / 2); // 5 => 2; 6 => 3; 7 => 3, etc...
            return -(((totalSteps + maxAbsoluteSteps + aL) % aL) - maxAbsoluteSteps);
        }

        function getRotation(type, target) {
            return +(getComputedStyle(target).getPropertyValue(`--${type}-rotation`).replace('deg', ''));
        }

        function rotateMenu(steps) {
            rotation += 360 * steps / axes.length;
            updateMenuRotation(rotation);
        }
    })
</script>
@endsection