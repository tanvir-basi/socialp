@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($profiles as $profile)
        <div class="row justify-content-center pb-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$profile->user->name}}</div>

                    <div class="card-body">
                        {{$profile->about}} <a href="/profile/{{$profile->id}}">open profile</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
