@extends('layouts.master')

@section('content')
    <!-- Registration :Start -->
    <section id="registration">
        <div class="container">
            <div class="row">
                <h1 class="text-uppercase text-center wow fadeInDown animated" data-wow-delay="2s">create account</h1>
                <div class="col-sm-4 col-md-offset-4">
                    <h3><strong>Login</strong></h3>
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
                    {!! Form::open(array('route' => 'login')) !!}

                    <div class="form-group">
                        {!! Form::label('Enter your email/username') !!}
                        &nbsp;<span class="required">*</span>
                        {!! Form::text('email', null, array('class' => 'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Enter your password') !!}
                        &nbsp;<span class="required">*</span>
                        {!! Form::password('password', array('class' => 'form-control')) !!}
                    </div>

                    {!! Form::token() !!}
                    {!! Form::submit('Login', array('class' => 'btn btn-primary')) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </section>
    <!-- Registration :End -->
@endsection