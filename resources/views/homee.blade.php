@extends('layouts.app')

@section('content')
<div class="container">
<label for="name" class="col-md-4 col-form-label text-md-right"><strong>WelCome In My Program Press <a href="/profile/{{auth()->user()->id}}" >*here*</a></strong></label>

</div>
@endsection
