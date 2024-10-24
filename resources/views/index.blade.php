@extends('layouts.no-padding')

{{-- @SECTION FOR THE START CONTENT --}}

@section('content')
    {{-- HERO IMAGE SECTION --}}

    <div class="hero w-full h-[300px] object-cover"
        style="background-image: url(https://picsum.photos/1440/300);">
        <div class="hero-overlay bg-opacity-85"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="text-white mb-5 text-5xl font-bold">StageRadar</span></h1>
                <p class="text-neutral-content mb-5">
                    Snel en gemakkelijk de beste stage die bij jouw past
                </p>

                @if (Auth::check() && Auth::user())
                    <a class="btn btn-primary" href="{{ route('internships.index') }}">
                        <button>
                            Begin met zoeken
                        </button>
                    </a>
                @else
                    <a class="btn btn-primary" href="{{ route('register') }}">
                        <button>
                            Meld je aan
                        </button>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <h1 class="mt-10 mb-5 text-4xl font-bold text-center">Nieuwste Stages</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-6">

        @foreach ($internships as $internship)
            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <a href="{{ route('internships.show', $internship->id) }}">
                        <img src="{{ $internship->image_url }}" />
                    </a>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $internship->course }}</h2>
                    <p><strong>Studie:</strong> {{ $internship->learning_path }}</p>
                    <p><strong>Locatie:</strong> {{ $internship->location }}</p>
                    <p><strong>Van:</strong> {{ \Carbon\Carbon::parse($internship->from)->format('F j, Y') }}</p>
                    <p><strong>Plekken beschikbaar:</strong> {{ $internship->spaces_left }}</a></p>
                    <p><strong>Stagevergoeding:</strong>{{ $internship->compensation ? '€' . number_format($internship->compensation, 2) : 'Unpaid' }}
                    </p>
                    <div class="card-actions justify-end mt-3">
                        <a class="btn btn-primary w-full" href="{{ route('internships.show', $internship->id) }}"><button>Bekijk</button></a>
                    </div>
                </div>
            </div>
        @endforeach

        </section>

        {{-- @ENDSECTION FOR THE END OF CONTENT --}}
    @endsection
