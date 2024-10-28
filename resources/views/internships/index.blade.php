@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="px-12 py-8 mx-auto rounded-md bg-base-100 shadow-mdg">

        <div class="inline-flex w-full px-6">
            <h1 class="mb-6 text-4xl font-bold">Stages</h1>

            <div class="inline-flex ml-auto">
                @livewire('search-bar')

                @if (Auth::check() && Auth::user()->id == 1)
                    <a class="ml-4 btn btn-success" href="{{ route('internships.create') }}">
                        <button>Creëer stage</button>
                    </a>
                @endif
            </div>
        </div>

        <div class="grid grid-cols-1 gap-6 p-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($internships as $internship)
                <div class="shadow-xl card bg-base-100">
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
                        <p><strong>Stagevergoeding:</strong>
                            {{ $internship->compensation ? '€' . number_format($internship->compensation, 2) : 'Onbetaald' }}
                        </p>
                        <div class="justify-end mt-3 card-actions">
                            <a class="w-full btn btn-primary"
                                href="{{ route('internships.show', $internship->id) }}"><button>Bekijk</button></a>
                            {{-- <button class="w-full btn btn-primary">Contact</button> --}}
                            {{-- EDIT --}}
                            @if (Auth::check() && Auth::user()->id == 1)
                                <a class="w-full btn btn-info" href="{{ route('internships.edit', $internship->id) }}">
                                    <button>Wijzigen</button>
                                </a>

                                {{-- DELETE --}}
                                <form class="w-full" action="{{ route('internships.destroy', $internship->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="w-full btn btn-error" type="submit">Verwijderen</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $internships->links() }}

    </section>
@endsection
