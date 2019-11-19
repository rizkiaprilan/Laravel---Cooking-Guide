@extends('layouts.master')

@section('title')
    Cooking Guide
    @endsection

@section('content')
    <section class="section bg-light py-5  bottom-slant-gray">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <img src="img/guide.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="text-left heading-wrap">
                        <h2 data-aos="fade-up">Cooking Guide</h2>
                    </div>
                    <!-- <h3 class="mb-4">Welcome To Our Restaurant</h3> -->
                    <p>The Cooking Guide is a website that specializes in making stoves to make good food and delicious drinks.</p>
                    <p>it was created based on complaints in cooking. to create more variant foods.</p>
                    {{--                <p><img src="home/img/signature.png" alt="Image" class="img-fluid w-25"></p>--}}
                </div>

            </div>
        </div>
    </section>
    @endsection

