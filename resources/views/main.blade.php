@include('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            @yield('ads')
        </div>
        <div class="col-sm-4">
            @include('layouts.loginIn')
            @include('layouts.auth')
        </div>
    </div>
</div>

</body>
</html>
