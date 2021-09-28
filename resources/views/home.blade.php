@extends('layouts.app')

@section('content')
<div class="container">
    <div> {{$user->name}} </div>
<div>{{$user->posts()->count()}} posts</div>
<div>13 followers</div>
<div>123 following</div>
<div> <img src="/storage/{{$user->profile->image}}"/> </div>
<div> {{$user->profile->description}} </div>
<div > {{$user->profile->url}}</div>
<div> {{$user->profile->title}}</div>
@foreach($user->posts as $post)
<div> <a href="/p/show/{{$post->id}}"><img src="/storage/{{$post->image}}"></a></div>
@endforeach
@can("update",$user->profile)
<a href="/p/create">Add new post</a>
@endcan
<br/>
@can("update",$user->profile)
<a href="/profile/{{$user->profile->id}}/edit">Edit Profile</a>
@endcan
</div>

@endsection
