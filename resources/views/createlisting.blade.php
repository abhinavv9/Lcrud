@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span><a href="/dashboard">&lt;Back</a></span> Create Listing</div>
    
                <div class="card-body">
                    {!! Form::open(['action'=>'ListingsController@store', 'method'=>'POST']) !!}
                        {{Form::bsText('name','',['placeholder'=>'Company name'])}}
                        {{Form::bsText('email','',['placeholder'=>'Company email'])}}
                        {{Form::bsText('phone','',['placeholder'=>'Company phone'])}}
                        {{Form::bsText('website','',['placeholder'=>'Company website'])}}
                        {{Form::bsText('address','',['placeholder'=>'Business address'])}}
                        {{Form::bsTextArea('bio','',['placeholder'=>'About this business'])}}
                        {{Form::bsSubmit('Add',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
@endsection