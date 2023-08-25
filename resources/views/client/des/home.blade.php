@extends('client.layouts.index')
@section('body-client')
<!-- tra cứu cổ phiếu -->
<style>
    .tab1 {
        max-height: 800px;
        overflow-y: scroll;
        text-align: justify;
        padding: 10px;
    }

    .tab1::-webkit-scrollbar {
        width: 1px;
    }

    .tab1::-webkit-scrollbar-thumb {
        background: #731b1bde;
        border-radius: 0.2rem;
    }

    .tab1 iframe {
        width: 100%;
    }
    .row{
        /* flex-wrap: unset; */
    }
    .tab2{
        padding: 10px 10px 10px 0;
        text-align: justify;
    }
    .tab2 h5{
        text-transform: uppercase;
    }
</style>
<div class="banner-wrapper">
    <section class="container">
        <div class="card">
            <div class="row">
                <div class="col-md-8">
                    <div class="tab1">
                    <iframe width="900" height="506" src="https://www.youtube.com/embed/_vburVnQm0Q" title="Nhạc Trẻ 8x 9x Hay Nhất Đời Đầu... Những Bản Nhạc Xưa Chill Nhẹ Nhàng - Nhạc Lofi 8x 9x Bất Hủ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <span>What is Lorem Ipsum?
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                        Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                        Where does it come from?
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

                        Where can I get some?
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                    </span>
                </div></div>
                <div class="col-md-4">
                    <div class="tab2">
                    <div>
                        <h5>Việc đầu tư cần thiết và quan trọng như thế nào</h5>
                        <p> - Quản trị tài chính, làm chủ cuộc sống</p>
                        <p> - Đầu tư để đạt mục tiêu tự do tài chính</p>
                    </div>
                    <div>
                        <h5>Trang bị đầu tư</h5>
                        <p> - Chuẩn bị vốn</p>
                        <p> - Mở tải khoản chứng khoán và bắt đầu phân bổ tài khoản đầu tư</p>
                        <p> - Công cụ và nền tảng để đầu tư</p>
                        <p> - Chuẩn bị về kiến thức trong đầu tư</p>
                        <p> - Chuẩn bị về tâm lý và xây dựng chiến lược đầu tư</p>
                    </div>
                    <div>
                        <h5>Phân tích ký thuật trong đầu tư - Phương pháp giao dịch</h5>
                        <p> - MA</p>
                        <p> - BB</p>
                        <p> - RSI</p>
                    </div>
                    <div>
                        <h5>Phân tích cơ bản trong đầu tư - Hoạch định chiến lược trung - dài hạn</h5>
                        <p> - Vĩ mô</p>
                        <p> - Ngành</p>
                        <p> - Cổ phiếu</p>
                        <p> - Định giá</p>
                    </div></div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="{{ URL::asset('dist\js\backend\pages\JS_System_Security.js') }}"></script>
<script type="text/javascript">
    NclLib.menuActive('.link-des');
    // var JS_System_Security = new JS_System_Security();
    //     $(document).ready(function($) {
    //         JS_System_Security.security();
    //     })
    NclLib.loadding();

</script>
@endsection