@extends('layouts.master')

@section('content')
    <!-- Registration :Start -->
    <section id="registration">
        <div class="container">
            <div class="row">
                <h1 class="text-uppercase text-center wow fadeInDown animated" data-wow-delay="2s">create account</h1>
                <div class="col-sm-6 col-md-offset-3">
                    <h1><strong>Create Ride</strong></h1>
                    <br/>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(array('route' => 'rides.store')) !!}

                    <div class="form-group">
                        {!! Form::label('Origin') !!}
                        &nbsp;<span class="required">*</span>
                        {!! Form::text('origin', null, array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Destination') !!}
                        &nbsp;<span class="required">*</span>
                        {!! Form::text('destination', null, array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Ride capacity') !!}
                        &nbsp;<span class="required">*</span>
                        {!! Form::select('capacity', [1,2,3,4,5,6,7,8,9,10], null, array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Description') !!}
                        {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
                    </div>

                    {!! Form::token() !!}
                    {!! Form::submit('Create ride', array('class' => 'btn btn-primary')) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </section>
    <!-- Registration :End -->
@endsection