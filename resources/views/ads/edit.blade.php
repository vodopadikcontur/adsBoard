@include('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-8">
            <form method="post" action="{{ route('ads.store') }}">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="title for ad" value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Desc</label>
                    <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc" placeholder="desc for ad" value="{{ old('desc') }}">
                    @error('desc')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="btn btn-primary" type="submit" value="Create"/>
                </div>

                @csrf
            </form>
        </div>
        <div class="col-4">
            @include('layouts.auth')
        </div>
    </div>
</div>
