@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><span><a href="/dashboard">&lt;Back</a></span> Edit Listing</div>
    
                <div class="card-body">
                    {!! Form::open(['action'=>['ListingsController@update',$listing->id], 'method'=>'POST']) !!}
                        {{Form::bsText('name',$listing->name,['placeholder'=>'Company name'])}}
                        {{Form::bsText('email',$listing->email,['placeholder'=>'Company email'])}}
                        {{Form::bsText('phone',$listing->phone,['placeholder'=>'Company phone'])}}
                        {{Form::bsText('website',$listing->website,['placeholder'=>'Company website'])}}
                        {{Form::bsText('address',$listing->address,['placeholder'=>'Business address'])}}
                        {{Form::bsTextArea('bio',$listing->bio,['placeholder'=>'About this business'])}}
                        {{Form::hidden('_method','PUT')}}
                        {{Form::bsSubmit('Save',['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
@endsection