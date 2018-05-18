@extends('layouts.master')


@section('content')


    <!--
    The sections start from the bottom (Slider) - up (Contact)
    Hehe ask Taylor Otwell WHY??
    -->

    <!-- Contact Section -->
    @extends('layouts.contactUs')


    <!-- Testimonial Section -->
    @extends('layouts.testimonials')


    <!-- Team Section -->
    @extends('layouts.team')


    <!-- Services Section -->
    @extends('layouts.services')


    <!-- Video Section -->
    @extends('layouts.homeVideo')


    <!-- About Section -->
    @extends('layouts.about')


    <!-- Slider Section -->
    @extends('layouts.sliderWithContent')



@endsection