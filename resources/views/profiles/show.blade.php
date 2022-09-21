@extends('layouts.app')

@section('content')
<div class="container pb-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    <div>
                        <img src="{{$profile->main_img}}" alt="" class="mw-100">
                    </div>
                    <div class="pt-3">
                        <h5>{{$profile->user->name}}</h5>
                        <p>{{$profile->about}}</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Comments</div>

                <div class="card-body">
                    @foreach ($profile->comments as $comment)
                    <div>
                        {{$comment->user->name}}: {{$comment->text}}
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection