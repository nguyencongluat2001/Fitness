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

    .treeview-animated ul li {
        list-style: none;
    }

    .showHideAll {
        padding: 0.5rem;
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

        .treeview-animated ul {
            padding-left: 1rem;
        }
    }
</style>
<div class="banner-wrapper">
    <section class="container">
        <div class="card" style="background-color: #ffffffd6;">
            <div class="row">
                <div class="col-md-7">
                    <div class="tab1"></div>
                </div>
                <div class="col-md-5">
                    <div class="container pt-3">
                        <div class="treeview-animated w-20 border mx-4 my-4">
                            <div class="showHideAll">
                                <span class="showAll">Hiển thị tất cả</span>
                                <span class="hideAll">Thu nhỏ tất cả</span>
                            </div>
                            <ul class="treeview-animated-list mb-3">
                                @if(isset($datas) && count($datas) > 0)
                                @foreach($datas as $key => $data)
                                <br>
                                <button  style="width:100%;text-align: left;background:#ffffff;margin-top:5px;" type="button" class="btn btn-light">
                                    <li class="treeview-animated-items">
                                        <a class="closed" id="title">
                                            <span>{{ $data['name_category'] }}</span>
                                        </a>
                                        <ul class="nested">
                                            @foreach($data['listItem'] as $k => $v)
                                            @php $id = $v['id']; @endphp
                                            <li class="treeview-animated-items">
                                                <a class="closed" onclick="reader('{{$id}}')"><i class="far fa-hand-point-right"></i> <span>{{ $v['title'] }}</span></a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </button>
                                
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
<script src="{{ URL::asset('assets/js/treelist.js') }}"></script>
<script>
    $(".showAll").click(function() {
        $(".nested").css('display', 'block');
        $(".toogle .fa-plus-circle").css('display', 'none');
        $(".toogle .fa-minus-circle").removeAttr('style');
    })
    $(".hideAll").click(function() {
        $(".nested").css('display', 'none');
        $(".toogle .fa-minus-circle").css('display', 'none');
        $(".toogle .fa-plus-circle").removeAttr('style');
    })
    
    var baseUrl = "{{url('')}}";
    console.log(baseUrl);
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
@endsection