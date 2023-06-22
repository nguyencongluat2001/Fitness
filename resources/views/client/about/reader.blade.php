@extends('client.layouts.index')
@section('body-client')
<div class="banner-wrapper">
    <!-- tra cứu cổ phiếu -->
    <section class="container" style="background:#ffffff8a">
        <div class="pt-3 pb-3 d-lg-flex gx-5">
            <div class="col-lg-12" style="background: #fff">
                <div class="card">
                    <div class="card-header" style="background: #ffc827;">
                        <h1>{{ $datas['blogDetail']->title }}</h1>
                    </div>
                    <div class="card-body">
                        <div style="width: 100%;">
                            {!! $datas['blogDetail']->decision !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    var type = '<?php echo $datas['type']; ?>';
    if(type == 'BAO_CAO_THTT'){
        NclLib.menuActive('.link-index');
        NclLib.menuActive_child('.link-index');
    }else if(type == 'BAO_CAO_TKP'){
        NclLib.menuActive('.link-session');
        NclLib.menuActive_child('.link-session');
    }else if(type == 'BAO_CAO_PTN'){
        NclLib.menuActive('.link-industry');
        NclLib.menuActive_child('.link-industry');
    }else if(type == 'BAO_CAO_PTCP'){
        NclLib.menuActive('.link-stock');
        NclLib.menuActive_child('.link-stock');
    }
</script>
@endsection