@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> 
                    <h3>
                        {{$listing->name}} 
                    </h3>
                    <p class="lead">{{$listing->address}}</p>
                </div>
                
                <div class="card-body">
                    <p>Website</p>
                    <p class="lead">
                        <a href="{{$listing->website}}" target="_blank"> {{$listing->website}} </a>
                    </p>
                    <p>Email</p>
                    <p class="lead">
                        <a href="mailto:{{$listing->email}}" target="_blank"> {{$listing->email}} </a>
                    </p>
                    <p>Phone</p>
                    <p class="lead">
                        <a href="tel:{{$listing->phone}}" target="_blank"> {{$listing->phone}} </a>
                    </p>
                    <p>About this Business</p>
                    <hr />
                    <p class="lead">
                        {{$listing->bio}}
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
@endsection