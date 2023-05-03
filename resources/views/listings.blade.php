@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Latest business listings</div>

            <div class="card-body">
                @if(count($listings))
                    <div class="list-group">
                        @foreach($listings as $listing)
                            <div class="list-group-item">
                                <h3>
                                    <a href="/listings/{{$listing->id}}">{{$listing->name}}</a>
                                </h3>
                                <p>
                                    {{$listing->address}}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-error">
                        <p>No listings found</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
