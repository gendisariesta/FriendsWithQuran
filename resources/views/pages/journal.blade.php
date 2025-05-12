@extends('layoutes.main')
@section('content')
    <div class="position-relative max-height-vh-100 h-100">
        <x-header>
            <x-slot:title>Read and Learn</x-slot:title>
        </x-header>
        <div class="container-fluid content-page"
            style="justify-items:right;padding-top:7rem;padding-right:7rem;background: url('img/bg.png');">
            <div class="owl-carousel owl-theme py-3 m-0 carousel-3" id="carousel-3" style="text-align:-webkit-right;">
                @foreach ($data as $dj)
                <div class="item border-radius-xl p-4 w-70 scrollable text-start"
                    style="height:70vh;overflow-y: auto;background-color:white">
                    <p class="mb-3 text-lg font-weight-bolder text-dark">Ayat No - {{ $dj['nomorAyat'] }}</p>
                    <h5 class="mt-0 mb-0">{{ $dj['ayat'] }} </h5>
                    <h6 class="mt-2 mb-2" style="color:#d4aa70">{{ $dj['terjemahan'] }} </h6>
                    <p class="text-sm font-weight-bolder text-success">{{ $dj['surah'] }} - {{ $dj['namaLatin'] }}</p>
                    <hr>
                    <h5 class="mt-4 mb-3">{{ $dj['journal'] }} </h5>
                    <p class="text-sm font-weight-bolder text-success">{{ $dj['nama'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
