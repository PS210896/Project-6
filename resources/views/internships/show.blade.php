@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        {{-- <a href="{{route('internships.edit', $product->id)}}">
            <button class="btn btn-info ml-auto">Edit Mode</button>
        </a> --}}

        <div class="grid grid-cols-2 gap-6 p-6">
        <img class="h-[300px]" src="{{ $internship->image ?? 'https://mir-s3-cdn-cf.behance.net/project_modules/1400/683bde173714301.649497f801aa1.jpg' }}" alt="Internship Image">
        <div>
            <p class="text-2xl mb-6 capitalize">{{ $internship->course }}</p>
            <p>Studie richting: {{ $internship->learning_path }}</p>
            <p>Locatie: {{ $internship->location }}</p>
            <p>Van: {{ $internship->from }}</p>
            <p>Plekken beschikbaar: {{ $internship->spaces_left }}</a></p>
            <p>Stagevergoeding: {{ $internship->compensation }}</p>
        </div>
        </div>
    </section>
@endsection
