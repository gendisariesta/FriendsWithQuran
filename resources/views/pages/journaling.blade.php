@extends('layoutes.main')
@section('content')
    <div class="position-relative max-height-vh-100 h-100">
        <x-header>
            <x-slot:title>Let's Write Journal</x-slot:title>
        </x-header>
        <div class="container-fluid content-page"
            style="justify-items:right;padding-top:8rem;padding-right:7rem;background: url('img/bg.png');">
            <div class="row border-radius-xl py-5 px-3 w-60 scrollable journaling-content"
                style="height:70vh;overflow-y: auto;background-color: rgb(255 255 255 / 45%) !important;backdrop-filter: saturate(50%) blur(5px);">
                <form id="multiStepForm" style="align-self: center;" action="{{ route('quran.submitJournal') }}" method="POST">
                    @csrf
                    <div class="step active">
                        <h2>Tell us your name...</h2>
                        <input type="text" id="name"name="name" required>
                    </div>
                    <div class="step">
                        <h2>Choose your surah</h2>
                        <select id="surah" name="surah" required>
                            {{-- <option selected disabled value="">-- select surah --</option> --}}
                            @foreach ($data as $surah)
                                <option value="{{ $surah['nomor'] }}">{{ $surah['namaLatin'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="step">
                        <p class="hidden" id="surahname"></p>
                        <h2>What ayat do you want to journaling?</h2>
                        <select id="ayat" name="ayat" required>
                            {{-- <option selected disabled value="">-- select ayat --</option> --}}
                        </select>
                    </div>
                    <div class="step">
                        <h2>Write your journal</h2>
                        <p class="mb-0 font-weight-bolder" style="color: #041d1e" id="noayat"></p>
                        <h5 class="mb-1 mt-4 text-end" style="color: #041d1e" id="textArab"></h5>
                        <p class="mb-0" style="color: #041d1e" id="terjemahan"></p>
                        <textarea name="journal" id="journal" cols="30" rows="5"></textarea>
                    </div>
                    <div class="button-container">
                        <button type="button" class="next">
                            Next
                        </button>
                        <button type="submit" class="submit" style="display: none;">
                            Submit
                        </button>
                        <button type="button" class="prev">
                            Previous
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
