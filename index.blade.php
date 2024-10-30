@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <h1>Debugging: This is the index view</h1> <!-- Temporary debug line -->
    <section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-4xl font-bold">Bedrijven</h1>
            @if (Auth::check() && Auth::user()->id == 1) <!-- Check if user is authenticated and has the appropriate role -->
                <a class="btn btn-success" href="{{ route('companies.create') }}">
                    Creëer bedrijf
                </a>
            @endif
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($companies as $company)
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">{{ $company->name }}</h2>
                        <img class="h-[300px] object-cover"
                             src="{{ $company->image ?? 'https://mir-s3-cdn-cf.behance.net/project_modules/1400/683bde173714301.649497f801aa1.jpg' }}"
                             alt="Company Image">
                        <div>
                            <p><strong>Adres:</strong> {{ $company->adress }}</p>
                            <p><strong>Telefoonnummer:</strong> {{ $company->phonenumber }}</p>
                        </div>
                        <div class="card-actions justify-end mt-3">
                            @if (Auth::check() && Auth::user()->id == 1) <!-- Check for user permissions -->
                                <a class="btn btn-info" href="{{ route('companies.edit', $company->id) }}">
                                    Wijzigen
                                </a>

                                <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-error" type="submit">Verwijderen</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $companies->links() }}
    </section>
@endsection 
