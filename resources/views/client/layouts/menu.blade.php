<style>
    .nav-link:hover{
        background: #ffffff;
        color: #00b609 !important
    }
</style>
<div id="menu-content">
    <div style="text-align: right; padding: .5rem; color:#fff;" class="btn_close">
        <span type="button" class="menu-close"><i class="fas fa-times" aria-hidden="true"></i></span>
    </div>
    <ul class="nav navbar-nav d-flex justify-content-between text-dark">
        @foreach($menuItems as $key => $value)
        <li class="nav-item ">
            <a class="nav-link ps-3 link-{{$key}}" style="color:white" href="{{ url('client') }}/{{$key}}/index"></i><i class="{{$value['icon']}}"></i> {{$value['name']}}</a>
        </li>
        @endforeach
    </ul>

    @foreach($menuItems as $key => $value)
    @php if($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '') $_SERVER['REQUEST_URI'] = 'datafinancial'; @endphp
    @if(!empty($value['child']) && strpos($_SERVER['REQUEST_URI'], $key) !== false)
    <div class="container d-flex justify-content-between align-items-center link-datafinancial active-menuClient">
        <div class="show" id="navbar-toggler-success 1">
            <div class="" style="border-radius:50%;margin:auto">
                <ul class="navbar-nav d-flex justify-content-between text-dark">
                    @foreach($value['child'] as $keyChild => $child)
                    <li class="nav-item">
                        <a class="nav-link ps-3 link-{{$keyChild}}" style="color:black;" href="{{ url('client') }}/{{$key}}/{{$keyChild}}"></i><i class="{{$child['icon']}}"></i> {{$child['name']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endif
    @endforeach

</div>