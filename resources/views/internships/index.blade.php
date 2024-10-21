@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-mdg">

        <div class="w-full inline-flex px-6">
            <h1 class="text-4xl font-bold mb-6">Stages</h1>

            <div class="ml-auto inline-flex">
                @livewire('search-bar')

                @if (Auth::check() && Auth::user()->id == 1)
                    <a class="btn btn-success ml-4" href="{{ route('internships.create') }}">
                        <button>Creëer stage</button>
                    </a>
                @endif
            </div>
        </div>

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
                        <p><strong>Stagevergoeding:</strong>
                            {{ $internship->compensation ? '€' . number_format($internship->compensation, 2) : 'Unpaid' }}
                        </p>
                        <div class="card-actions justify-end mt-3">
                            <a class="btn btn-primary w-full"
                                href="{{ route('internships.show', $internship->id) }}"><button>Bekijk</button></a>
                            {{-- <button class="btn btn-primary w-full">Contact</button> --}}
                            {{-- EDIT --}}
                            @if (Auth::check() && Auth::user()->id == 1)
                                <a class="btn btn-info w-full" href="{{ route('internships.edit', $internship->id) }}">
                                    <button>Wijzigen</button>
                                </a>

                                {{-- DELETE --}}
                                <form class="w-full" action="{{ route('internships.destroy', $internship->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-error w-full" type="submit">Verwijderen</button>
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
