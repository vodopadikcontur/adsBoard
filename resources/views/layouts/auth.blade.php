@auth
    <h2>Hi, {{ \Illuminate\Support\Facades\Auth::user()->username }}</h2>
    <p><a href="{{ route('logout') }}" type="button" class="btn btn-primary">Logout</a></p>
@endauth
