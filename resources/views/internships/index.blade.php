@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-mdg">

        <div class="w-full inline-flex">
            <h1 class="text-4xl font-bold mb-6">Stages</h1>

            <div class="ml-auto inline-flex">

                <a class="btn btn-success" href="{{ route('internships.create') }}">
                    <button>Creeer Stage</button>
                </a>
            </div>
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
                            {{-- EDIT --}}
                            <a class="btn btn-info w-full" href="{{ route('internships.edit', $internship->id) }}">
                                <button>Wijzigen {{ $internship->name }}</button>
                            </a>

                            {{-- DELETE --}}
                            <form class="w-full" action="{{ route('internships.destroy', $internship->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-error w-full" type="submit">Verwijderen {{ $internship->name }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $internships->links() }}

    </section>
@endsection
