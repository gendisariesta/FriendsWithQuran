@extends('layoutes.main')
@section('content')
<div class="position-relative max-height-vh-100 h-100">
    <x-header>
        <x-slot:title>Let's Read Quran</x-slot:title>
    </x-header>
    <div class="container-fluid content-page" style="justify-items:right;padding-top:7rem;padding-right:7rem;background: url('img/bg.png');">
        <div class="row border-radius-xl py-4 w-70 scrollable fade-in-element list-quran-content" style="height:80vh;overflow-y: auto;background-color: rgb(255 255 255 / 45%) !important;backdrop-filter: saturate(50%) blur(5px);">
            @foreach ($data as $quran)
            <div class="col-log-6 col-12 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">{{ $quran['nama'] }}</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{ $quran['namaLatin'] }}
                                        <span class="text-success text-sm font-weight-bolder">{{ $quran['jumlahAyat'] }} ayat</span>
                                    </h5>
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">{{ $quran['arti'] }} </p>
                                </div>
                            </div>
                            <div class="col-4 text-end card-menu" style="align-self: center">
                                <a href="/quran/{{ $quran['nomor'] }}" class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-curved-next text-lg opacity-10" aria-hidden="true"></i>
                                </a>
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
