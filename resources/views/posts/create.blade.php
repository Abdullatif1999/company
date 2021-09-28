@extends('layouts.app')

@section('content')
<div class="container">
  <form method="post" action="/p/store" enctype="multipart/form-data">
    @csrf
 <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label text-md-right"><strong>Caption</strong></label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" required >

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                          </div>
                          <br/>
                        <input type="file" name="image"/>
                                <br/>
                        <input type="submit" value="Add new post">

</form>

</div>
@endsection
