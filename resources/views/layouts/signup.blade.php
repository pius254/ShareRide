@extends('layouts.master')

@section('content')	
	<!-- Registration :Start -->
        <section id="registration">
            <div class="container">
                <div class="row">
                    <h1 class="text-uppercase text-center wow fadeInDown animated" data-wow-delay="2s">create account</h1>
                    <div class="col-sm-6 col-md-offset-3">
                        <h1><strong>REGISTER</strong></h1>
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
                        {!! Form::open(array('route' => 'signup')) !!}

                        <div class="form-group">
                            {!! Form::label('First name') !!}
                            &nbsp;<span class="required">*</span>
                            {!! Form::text('first_name', null, array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Last name') !!}
                            &nbsp;<span class="required">*</span>
                            {!! Form::text('last_name', null, array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Username') !!}
                            &nbsp;<span class="required">*</span>
                            {!! Form::text('username', null, array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Phone number') !!}
                            &nbsp;<span class="required">*</span>
                            {!! Form::number('phone_number', null, array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email') !!}
                            &nbsp;<span class="required">*</span>
                            {!! Form::email('email', null, array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Password(Minim 8 characters)') !!}
                            &nbsp;<span class="required">*</span>
                            {!! Form::password('password', array('class' => 'form-control')) !!}
                        </div>

                         <div class="form-group">
                            {!! Form::label('Confirm password') !!}
                            &nbsp;<span class="required">*</span>
                            {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                        </div>
                            
                            {!! Form::token() !!}
                            {!! Form::submit('Sign Up', array('class' => 'btn btn-primary')) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
             
        </section>
        <!-- Registration :End -->
@endsection