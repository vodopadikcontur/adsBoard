@include('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-8">
            <form method="post" action="{{ route('ads.update', ['id' => $ad->id]) }}">
                @method('put')
                <div class="mb-3">
                    <h3>Old Title: {{$ad->title}}</h3>
                    <h3>Old Desc: {{$ad->desc}}</h3>
                    <hr>
                    <label for="title" class="form-label">New Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Old Title - {{ $ad->title }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">New Desc</label>
                    <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" placeholder="Old Title - {{ $ad->desc }}">
                    @error('desc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="EDIT"/>
                </div>
                @csrf
            </form>
        </div>
        <div class="col-4">
            @include('layouts.auth')
        </div>
    </div>
</div>
