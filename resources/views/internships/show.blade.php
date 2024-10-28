@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        {{-- <a href="{{route('internships.edit', $product->id)}}">
            <button class="ml-auto btn btn-info">Edit Mode</button>
        </a> --}}

        <div class="grid grid-cols-2 gap-6 p-6">
            <img class="h-[300px]"
                src="{{ $internship->image ?? 'https://mir-s3-cdn-cf.behance.net/project_modules/1400/683bde173714301.649497f801aa1.jpg' }}"
                alt="Internship Image">
            <div>
                <p class="mb-6 text-2xl font-bold capitalize">{{ $internship->course }}</p>
                <p><strong>Studie:</strong> {{ $internship->learning_path }}</p>
                <p><strong>Locatie:</strong> {{ $internship->location }}</p>
                <p><strong>Van:</strong> {{ $internship->from }}</p>
                <p><strong>Plekken beschikbaar:</strong> {{ $internship->spaces_left }}</a></p>
                <p><strong>Stagevergoeding:</strong>
                    {{ $internship->compensation ? '€' . number_format($internship->compensation, 2) : 'Onbetaald' }}
                </p>
                <br>
                <a class="btn btn-primary" href="{{ route('internships.show', $internship->id) }}"><button>Aanmelden</button></a>
            </div>
        </div>
    </section>
@endsection
