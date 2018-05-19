@extends('layouts.master')



@section('content')
	
	<!-- Registration :Start -->
        <section id="registration">
            <div class="container">
                <div class="row">
                    <h1 class="text-uppercase text-center wow fadeInDown animated" data-wow-delay="2s">create account</h1>
                    <div class="col-sm-6 col-md-offset-3">
                        <h1><strong>REGISTER</strong></h1>
                        {!! Form::open(array('route' => 'register')) !!}

                        <div class="form-group">
                            {!! Form::label('First Name') !!}
                            {!! Form::text('First Name', null, array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Last Name') !!}
                            {!! Form::text('Last Name', null, array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Username') !!}
                            {!! Form::text('Username', null, array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Phone Number') !!}
                            {!! Form::number('Phone Number', null, array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email') !!}
                            {!! Form::email('email', null, array('class' => 'form-control')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password') !!}
                            {!! Form::password('password', array('class' => 'form-control')) !!}
                        </div>
                            
                            {!! Form::token() !!}
                            {!! Form::submit('Register', array('class' => 'btn btn-primary')) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
             
        </section>
        <!-- Registration :End -->


@endsection