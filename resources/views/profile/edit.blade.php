@extends('layouts.app')

@section('content')
<div class="container">
  <form method="post" action="/profile/{{$profile->id}}/storeEdit" enctype="multipart/form-data">
    @csrf

    <img src="/storage/{{$profile->image}}"/>
 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><strong>Name</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{$profile->user->name}}" class="form-control @error('name') is-invalid @enderror" name="name" required >

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          </div>
                          <br/>
                           <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right"><strong>Title</strong></label>

                            <div class="col-md-6">
                                <input id="title" type="text"  value = "{{$profile->title}}"class="form-control @error('title') is-invalid @enderror" name="title" required >

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          </div>
                          <br/>
                          <div class="form-group row">
                            <label for="disctiption" class="col-md-4 col-form-label text-md-right"><strong>Description</strong></label>

                            <div class="col-md-6">
                                <input id="description" type="text" value="{{$profile->description}}" class="form-control @error('description') is-invalid @enderror" name="description" required >

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          </div>
                          <br/>
                          <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right"><strong>URL</strong></label>

                            <div class="col-md-6">
                                <input id="url" type="text" value = "{{$profile->url}}"class="form-control @error('url') is-invalid @enderror" name="url" required >

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          </div>
                        <input type="file" name="image"/>
                                <br/>
                        <input type="submit" value="Edit Profile">

</form>

</div>
@endsection
