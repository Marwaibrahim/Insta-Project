@extends('layouts.app')

@section('content')
<div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                       <h1>Edit Profile</h1>
                    </div>
                    <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label">Title</label>

                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="row">
                            <label for="discription" class="col-md-4 col-form-label">Description</label>
                            <input type="discription" class="form-control @error('discription') is-invalid @enderror" id="discription" name="discription"  value="{{ old('discription') ?? $user->profile->discription}}" autocomplete="discription" autofocus>
                            @error('discription')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="row">
                            <label for="url" class="col-md-4 col-form-label">URL</label>
                            <input type="url" class="form-control @error('url') is-invalid @enderror" id="url" name="url"  value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="row">
                            <label for="image" class="col-md-4 col-form-label">Profile Image</label>
    
                            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image"  value="{{ old('image') ?? $user->profile->image }}" autocomplete="image" autofocus>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="row pt-4">
                            <button class="btn btn-primary">Save Profile</button>
                    </div>
                </div>

            </div>
        </form>
</div>
@endsection
