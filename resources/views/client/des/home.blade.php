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

    .row {
        /* flex-wrap: unset; */
    }

    .tab2 {
        padding: 10px 10px 10px 0;
        text-align: justify;
    }

    .tab2 h5 {
        text-transform: uppercase;
    }

    .service-tag {
        font-size: 20px;
    }

    .showHideAll {
        padding: 1rem;
    }

    .showHideAll .showAll,
    .showHideAll .hideAll {
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #77837a;
        padding: 5px 1rem;
        color: #fff;
        cursor: pointer;
    }

    a {
        cursor: pointer;
    }

    .treeview-animated-items #title {
        color: #000 !important;
        text-decoration: none;
    }

    @media (max-width: 450px) {
        .service-wrapper {
            padding-top: 1rem !important;
        }

        h2 {
            font-size: 30px;
        }

        .treeview-animated {
            margin-top: 0 !important;
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .showHideAll {
            padding: 1rem;
        }

        .showHideAll .showAll,
        .showHideAll .hideAll {
            width: 100%;
            display: block;
        }
    }



    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }

    ul.components {
        padding: 0;
    }

    .collapse:not(.show) {
        display: none;
    }

    .list-unstyled .dropdown-toggle::after {
        display: none;
    }
</style>
<div class="banner-wrapper">
    <section class="container">
        <div class="card" style="background-color: #b56c6cb5;">
            <div class="row">
                <div class="col-md-8">
                    <div class="tab1">{!! $readerFirst ?? '' !!}</div>
                </div>
                <div class="col-md-4">
                    <div class="container pt-3 ps-0">
                        <div class="treeview-animated w-20 border">
                            <div class="showHideAll">
                                <span class="showAll">Hiển thị tất cả</span>
                                <span class="hideAll">Thu nhỏ tất cả</span>
                            </div>
                            <ul class="list-unstyled components m-3">
                                @if(isset($datas) && count($datas) > 0)
                                @foreach($datas as $key => $data)
                                <li class="active">
                                    <a href="{{ !empty($data['listItem']) ? ('#' . $data['code_category'] . '_' . $data['id']) : 'javascript:;' }}"
                                        <?php echo empty($data['listItem']) ? 'onclick="reader(\'' . $data['id'] . '\')"' : '' ?>
                                        type="button"
                                        data-toggle="collapse" 
                                        aria-expanded="false" 
                                        class="dropdown-toggle btn btn-light mb-2"
                                        style="width: 100%;outline: none;box-shadow: none;white-space: unset;text-align: justify;"
                                        onclick="toggleIcon(this)"
                                        >
                                        <i class="fas fa-book"></i> <span>{{ $data['name_category'] }}</span></a>
                                    <ul class="collapse list-unstyled" id="{{ $data['code_category'] }}_{{ $data['id'] }}">
                                        @if(isset($data['listItem']))
                                        @foreach($data['listItem'] as $k => $v)
                                        @php $id = $v['id']; @endphp
                                        <li><span><i class="far fa-hand-point-right ms-3"></i> <a class="closed" onclick="reader('{{$id}}')"><span>{{ $v['title'] }}</span></a></span></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="{{ URL::asset('dist\js\backend\pages\JS_System_Security.js') }}"></script>
<!-- <script src="{{ URL::asset('assets/js/treelist.js') }}"></script> -->
<script src="{{ URL::asset('assets/js/popper.js') }}"></script>
<script src="{{ URL::asset('clients/js/bootstrap.min.js') }}"></script>
<script>
    $(".showAll").click(function() {
        $(".list-unstyled").addClass('show');
        $(".fas.fa-book").addClass('fa-book-open');
    })
    $(".hideAll").click(function() {
        $(".list-unstyled").removeClass('show');
        $(".fas.fa-book").removeClass('fa-book-open');
    })

    var baseUrl = "{{url('')}}";
    function reader(id) {
        $.ajax({
            url: baseUrl + '/client/des/reader',
            type: "GET",
            data: {
                id: id
            },
            dataType: 'JSON',
            success: function(arrResult) {
                $(".tab1").html(arrResult['content']);

            }
        });
    }
</script>
<script type="text/javascript">
    NclLib.menuActive('.link-des');
    // var JS_System_Security = new JS_System_Security();
    //     $(document).ready(function($) {
    //         JS_System_Security.security();
    //     })
    NclLib.loadding();
</script>
<script>
    function toggleIcon(_this){
        $(_this).find('i').toggleClass('fa-book-open', 'fa-book')
    }
</script>
@endsection