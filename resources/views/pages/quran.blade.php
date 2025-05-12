@extends('layoutes.main')
@section('content')
<div class="position-relative max-height-vh-100 h-100">
    <x-header>
        <x-slot:title></x-slot:title>
    </x-header>
    <div class="container-fluid pt-8 ps-6 pe-5" style="justify-items:center;background: url('img/bg.png');">
        <div class="row border-radius-xl py-4 w-90 scrollable read-quran" style="height:80vh;overflow-y: auto;background-color: rgb(255 255 255 / 45%) !important;backdrop-filter: saturate(50%) blur(5px);">
            <div class="text-center mb-3" style="background-color: #d4aa70">
            <h3 class="mb-0">{{ $data['nama'] }}</h3>
            <h4 class="mb-0">{{ $data['namaLatin'] }}</h4>
            <h6>{{ $data['tempatTurun'] }} - <span>("{{ $data['arti'] }}")</span></h6>
            </div>
            @foreach ($data['ayat'] as $ayat)
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row gutter-mobile">
                            <div class="col-1 text-start" style="align-self: center">
                                <a href="#" onclick="playAudio({{ $ayat['nomorAyat']}})" class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md card-menu">
                                    <i class="ni ni-button-play text-lg opacity-10" aria-hidden="true"></i>
                                    <audio id="myAudio{{ $ayat['nomorAyat']}}">
                                        <source src="{{ $ayat['audio']['03']}}" type="audio/mpeg">
                                    </audio>                                      
                                </a>
                            </div>
                            <div class="col-11">
                                <div class="numbers">
                                    <div class="d-flex">
                                    <h3 class="font-weight-bolder mb-3 text-start">{{ $ayat['nomorAyat'] }}</h3>
                                    <h3 class="font-weight-bolder mb-3 text-end w-100">{{ $ayat['teksArab'] }}</h3>
                                    </div>
                                    <h6 class="mb-2 font-weight-bold" style="color: #d4aa70">{{ $ayat['teksLatin'] }} </h6>
                                    <h5 class="font-weight-bold mb-1">
                                        {{ $ayat['teksIndonesia'] }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</div>
@endsection
