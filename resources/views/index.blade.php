@extends('layouts.no-padding')

{{-- @SECTION FOR THE START CONTENT --}}

@section('content')
    {{-- HERO IMAGE SECTION --}}
    <div class="col-span-full">
        <figure class="relative">
            <img
            src="https://picsum.photos/1440/300"
            alt="Hero Image"
            class="w-full h-auto object-cover opacity-60"/>
        </figure>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 p-6">

        @foreach ($internships as $internship)
        <div class="card bg-base-100 shadow-xl">
            <figure>
                <a href="{{ route('internships.show', $internship->id) }}">
                    <img src="{{ $internship->image_url }}" alt="Shoes" />
                </a>
            </figure>
            <div class="card-body">
                <h2 class="card-title">{{ $internship->course }}</h2>
                <p>{{ $internship->spaces_left }} Spaces Left</p>
                <p>{{ $internship->learning_path }} - Location: {{ $internship->location }}</p>
                <p><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($internship->from)->format('F j, Y') }}</p>
                <p><strong>Compensation:</strong>
                    {{ $internship->compensation ? '$' . number_format($internship->compensation, 2) : 'Unpaid' }}
                </p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary w-full">Contact</button>
                </div>
            </div>
        </div>
    @endforeach

    </section>

    {{-- @ENDSECTION FOR THE END OF CONTENT --}}

@endsection
