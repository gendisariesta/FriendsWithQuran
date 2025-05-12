@extends('layoutes.main')
@section('content')
<div class="position-relative max-height-vh-100 h-100">
    <x-navbar/>
    <div class="container-fluid px-0">
        <div class="position-absolute top-0 z-index-2 w-90 shadow-none mt-4 px-7 py-8 first-header">
            <h1 class="mb-4 text-white text-title" style=" transition: opacity 2s; opacity: 1;">Friends <br> with Quran.
            </h1>
            <h5 class="mb-2 text-white">“Guide Us To The Straight Path” – Surah Fatiha Ayat 6</h5>
            <a href="#menu" type="button" class="btn-menu btn bg-gradient-dark my-4 mb-2 mt-5 w-20 btn-rounded text-lg">Let's Start</a>
        </div>
        {{-- <div id="zoom" class="border-radius-xl mt-4 px-6 py-8"
            style="transition: transform 0.1s ease-out;height:90vh;background-image: url('img/bg.png')">
        </div> --}}
        <div class="zoom-wrapper px-4 pt-4" style="position: relative;overflow: hidden;width: 100%">
            <div id="zoom" class="border-radius-xl zoom-content" style="background: url('{{ url('img/bg.png') }}'); height: 90vh;transition: transform 0.2s ease-out;transform-origin: center;">
            </div>
        </div>
    </div>
    <div class="container-fluid my-5 py-5" style="width: 100%;position: relative;overflow: hidden;" id="menu">
        <h1 class="mb-4 text-dark text-center text-content title" style="transition: transform 0.2s ease-out;">Our Menu</h1>
        {{-- <div class="row mt-4 mx-5"> --}}
        <div class="owl-carousel owl-theme" id="carousel-0">
            <div class="px-3 py-5 item">
                <a href="{{ url('/quran') }}" class="card z-index-2 card-menu">
                    <div class="card-body p-3">
                        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3" style="background: url({{ url('/img/img6.jpg') }});background-position:center center">
                            <canvas id="chart-bars" class="chart-canvas" height="190"></canvas>
                        </div>
                        <h6 class="ms-2 mt-4 mb-0">Read Quran</h6>
                        <p class="text-sm ms-2">Discover the serenity of reading the Quran and allow its verses to inspire and guide you.</p>
                    </div>
                </a>
            </div>
            <div class="px-3 py-5 item">
                <a href="{{ url('/journal') }}" class="card z-index-2 card-menu">
                    <div class="card-body p-3">
                        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3" style="background: url({{ url('/img/img3.jpg') }});background-position:bottom">
                            <canvas id="chart-bars" class="chart-canvas" height="190"></canvas>
                        </div>
                        <h6 class="ms-2 mt-4 mb-0">Read Journal</h6>
                        <p class="text-sm ms-2">Discover the profound meanings behind Quranic verses through read the journal</p>
                    </div>
                </a>
            </div>
            <div class="px-3 py-5 item">
                <a href="{{ url('/journaling') }}" class="card z-index-2 card-menu">
                    <div class="card-body p-3">
                        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3" style="background: url({{ url('/img/img1.jpg') }});background-position:left center">
                            <canvas id="chart-bars" class="chart-canvas" height="190"></canvas>
                        </div>
                        <h6 class="ms-2 mt-4 mb-0">Quran Journaling</h6>
                        <p class="text-sm ms-2">Reflective practice that involves writing insights and personal reflections inspired by the Quran</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 py-5 px-6" style="height:100vh;background-image: linear-gradient(91deg, #0b1a1d, #022325, #295a4f, #53816d);" id="quotes" >
        <h1 class="mb-5 mt-0 text-content text-center text-white fade-in hidden" style="transition: opacity 2s transform 0.5s ease-out;opacity: 1;">Send Yours Quran's Journal</h1>
        <div class="owl-carousel owl-theme" id="carousel-1">
            @foreach ($data as $dj)
            <div class="card item">
                <div class="card-body p-3">
                    <div class="bg-gradient-light border-radius-lg py-3 pe-1 mb-3">
                        <div class="chart mx-3">
                            <p class="text-sm font-weight-bold" >Ayat No - {{ $dj['nomorAyat']}}</p>
                            <h6 class="mt-0 mb-0" style="display: -webkit-box;-webkit-box-orient: vertical;overflow: hidden;-webkit-line-clamp: 2;"> {{ $dj['ayat'] }} </h6>
                            <h6 class="mt-2 mb-2" style="display: -webkit-box;-webkit-box-orient: vertical;overflow: hidden;-webkit-line-clamp: 2;"> {{ $dj['terjemahan'] }} </h6>
                            <p class="text-sm" >{{ $dj['surah']}} - {{ $dj['namaLatin']}}</p>            
                        </div>
                    </div>
                    <h6 class="ms-2 mt-4 mb-0" style="display: -webkit-box;-webkit-box-orient: vertical;overflow: hidden;-webkit-line-clamp: 3;"> {{ $dj['journal'] }} </h6>
                    <p class="text-sm ms-2" >{{ $dj['nama']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid my-5 pt-5" id="about">
        <div class="row mx-3 g-6 about-mobile">
            <div class="col-lg-6 mb-lg-0 mb-4 order-2 order-lg-1 col-12">
                <div class="card item">
                    <div class="card-body p-3">
                        <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3" style="background: url({{ url('/img/banner2.jpg') }});background-position:center">
                        <canvas id="chart-bars" class="chart-canvas" height="190"></canvas>
                        </div>
                        <h6 class="ms-2 mt-4 mb-0"> وَوَجَدَكَ ضَالًّا فَهَدَىٰ </h6>
                        <p class="text-sm ms-2">And He found you lost and guided [you], (Quran 93:7)</p>
                    </div>
                </div>
                <a href="{{ url('/quran') }}" type="button" class="btn-about btn bg-gradient-dark my-4 mb-2 mt-4 w-40 text-lg">Start Reading</a>
            </div>
            <div class="col-lg-6 mb-lg-0 mb-4 order-1 order-lg-2 col-12">
                <h1 class="mb-4 text-content fade-in hidden" style=" transition: opacity 2s transform 0.5s ease-out; opacity: 1;">About</h1>
                <h5 class="mb-2 typing-effect">“Allah does not charge a soul except [with that within] its capacity. It will have [the consequence of] what [good] it has gained, and it will bear [the consequence of] what [evil] it has earned. “Our Lord, do not impose blame upon us if we have forgotten or erred. Our Lord, and lay not upon us a burden like that which You laid upon those before us. Our Lord, and burden us not with that which we have no ability to bear. And pardon us; and forgive us; and have mercy upon us. You are our protector, so give us victory over the disbelieving people.” - Ayat 286</h5>
            </div>
        </div>
    </div>
<x-footer/>    
</div>
@endsection
