@include('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="ad">
                <h2 class="text-center">{{ $ad->title }}</h2>
                <p style="margin: 10px;">desc: {{ $ad->desc}}</p>
                <p style="margin: 10px;">Author: {{ $ad->author->username }}</p>
                <p style="margin: 10px;">Created: {{$ad->created_at}}</p>
                @auth
                    <p class="text-center"><a href="{{url('edit', ['id'=> $ad->id])}}">EDIT</a></p>
                    <form action="{{ route('ads.destroy', ['id' => $ad->id]) }}" method="POST" class="text-center">
                        @method('delete')
                        @csrf
                        <input type="submit" class="btn btn-primary" value="Delete">
                    </form>
                @endauth
            </div>
        </div>
        <div class="col-sm-4">
            @include('layouts.loginIn')
            @include('layouts.auth')
        </div>
    </div>
</div>
</body>
</html>
