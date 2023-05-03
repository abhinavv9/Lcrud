@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-success btn-xs">Add</a></span></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if(isset($listings))
                    <div class="list-group">
                        @foreach($listings as $listing)
                            <div class="list-group-item">
                                <h3>
                                    {{$listing->name}}
                                </h3>
                                <p>
                                    {{$listing->address}}
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="/listings/{{$listing->id}}/edit" class="btn btn-primary">Edit</a>
                                        </div>
                                        <div class="col-sm-6">
                                            {!! Form::open(['action' => ['ListingsController@destroy',$listing->id], 'method'=>'post', 'class'=>'d-inline', 'onsubmit'=>'return confirm("Are you sure");']) !!}
                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
