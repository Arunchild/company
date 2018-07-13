@extends('company::layouts.app')

@section('content')
    <div class="container">
        <h3>Add a New Company</h3>
        <hr><p class="lead">Create New Company, or <a href="{{ route('company.index') }}">Go back to all Company Details.</a></p>

        {!! Form::open([
        'route' => 'company.store', 'id' => 'formidda'
        ]) !!}
        <div class="row">
            <div class="col-md-3">
                {!! Form::input('text', 'companyname', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'Company Name', 'tabindex' => 4)) !!}
            </div>

            <div class="col-md-3">
                {!! Form::input('text', 'billingname', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'Billing Name', 'tabindex' => 5)) !!}
            </div>

            <div class="col-md-3">
                {!! Form::input('text', 'addressline1', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'Adress Line 1', 'tabindex' => 7)) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                {!! Form::input('text', 'addressline2', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'Address Line 2', 'tabindex' => 8)) !!}
            </div>

            <div class="col-md-3">
                {!! Form::input('text', 'state', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'state', 'tabindex' => 8)) !!}
            </div>

            <div class="col-md-3">
                {!! Form::input('text', 'pincode', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'pincode', 'tabindex' => 8)) !!}
            </div>
        </div>


        <div class="row">
            <div class="col-md-3">
                {!! Form::input('text', 'country', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'country', 'tabindex' => 8)) !!}
            </div>

            <div class="col-md-3">
                {!! Form::input('text', 'mobile', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'mobile', 'tabindex' => 8)) !!}
            </div>

            <div class="col-md-3">
                {!! Form::input('text', 'gst', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'Gst', 'tabindex' => 2)) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                {!! Form::input('text', 'email', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'email', 'tabindex' => 2)) !!}
            </div>

            <div class="col-md-3">
                {!! Form::input('text', 'website', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'website', 'tabindex' => 2)) !!}
            </div>

            <div class="col-md-3">
                {!! Form::input('text', 'contact_person', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'contact_person', 'tabindex' => 2)) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                {!! Form::input('text', 'contact_person_mobile', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'contact_person_mobile', 'tabindex' => 2)) !!}
            </div>

            <div class="col-md-3">
                {!! Form::input('file', 'logo', null, array('class' => 'form-control TabOnEnter', 'placeholder' => 'logo', 'tabindex' => 2)) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                {!! Form::submit('Create New Company', array('class' => 'CreateCashEntry btn btn-primary TabOnEnter', 'tabindex' => 10)) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop