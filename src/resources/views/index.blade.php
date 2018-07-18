@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center text-danger">Company Details</h1>

        <br/><h1 class="text-center text-warning">Want to create new one... <a class="btn btn-danger" href="{{ route('company.create') }}">Create Company</a></h1><br/>

        <?php $i = 1; ?>
        @foreach($items as $item)
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Heres a Details of Your Company {{ $i }} &#160;&#160;&#160;&#160;

                        <a href="{{ route('company.edit', $item->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        {!! Form::open([ 'method' => 'DELETE', 'style' => 'display:inline', 'class' => 'form-inline', 'route' => ['company.destroy', $item->id] ]) !!}
                        {!! Form::button('<i class="fas fa-trash-alt"></i>', array('type' => 'submit', 'class' => 'btn btn-danger')) !!}
                        {!! Form::close() !!}
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover table-condensed table-bordered">
                        <tbody>
                        <tr>
                            <td> Comapny Name:</td>
                            <td>{{ $item->companyname }}</td>
                        </tr>

                        <tr>
                            <td> billingname:</td>
                            <td>{{ $item->billingname }}</td>
                        </tr>
                        <tr>
                            <td> Address 1:</td>
                            <td>{{ $item->addressline1 }}</td>
                        </tr>
                        <tr>
                            <td>Address 2: </td>
                            <td> {{ $item->addressline2 }}</td>
                        </tr>

                        <tr>
                            <td> state:</td>
                            <td>{{ $item->state }}</td>
                        </tr>
                        <tr>
                            <td> pincode:</td>
                            <td>{{ $item->pincode }}</td>
                        </tr>
                        <tr>
                            <td> country:</td>
                            <td>{{ $item->country }}</td>
                        </tr>
                        <tr>
                            <td> mobile:</td>
                            <td>{{ $item->mobile }}</td>
                        </tr>
                        <tr>
                            <td> gst:</td>
                            <td>{{ $item->gst }}</td>
                        </tr>
                        <tr>
                            <td> email:</td>
                            <td>{{ $item->email }}</td>
                        </tr>
                        <tr>
                            <td> website:</td>
                            <td>{{ $item->website }}</td>
                        </tr>

                        <tr>
                            <td> contact_person:</td>
                            <td>{{ $item->contact_person }}</td>
                        </tr>

                        <tr>
                            <td> contact_person_mobile:</td>
                            <td>{{ $item->contact_person_mobile }}</td>
                        </tr>

                        <tr>
                            <td> logo:</td>
                            <td>{{ $item->logo }}</td>
                        </tr>
                        </tbody>
                    </table>


                </div>
            </div>
            <?php $i++; ?>
        @endforeach
    </div>
@stop
