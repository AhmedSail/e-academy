@extends('front.app')

@section('content')
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ asset('images/page-banner-2.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2 class="text-center">Enroll In : {{ $course->name }}</h2>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <section id="corses-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{ $id }}"></script>
                    <form action="{{ route('payment',$course->id) }}" class="paymentWidgets mx-auto" data-brands="VISA MASTER AMEX  MADA"></form>
                    @if (session('msg'))
                    <div class="alert alert-danger">
                        {{ session('msg') }}
                    </div>
                    @endif
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
@stop
