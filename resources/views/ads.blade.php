@extends('main')

@section('ads')
    @foreach($ads as $ad)
        <div class="ad">
            <a href="{{url("/",['id'=> $ad->id]) }}">
                <h2 class="text-center">{{ $ad->title }}</h2></a>
            <p style="margin: 10px;">desc: {{ $ad->desc}}</p>
            <p style="margin: 10px;">Author: {{ $ad->author->username }}</p>
            <p style="margin: 10px;">Created: {{$ad->created_at}}</p>
            <p style="margin: 10px;">Updated: {{$ad->updated_at}}</p>
            @auth()
                <a href="{{url('edit', ['id'=> $ad->id])}}" class="btn btn-outline-primary float-right">EDIT</a>
            @endauth
        </div>
    @endforeach
    {{$ads->links()}}
@endsection
