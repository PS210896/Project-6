@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">
        <h1 class="text-4xl font-bold mb-6">{{ $company->name }}</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <img class="h-[300px] object-cover"
                src="{{ $company->image ?? 'https://mir-s3-cdn-cf.behance.net/project_modules/1400/683bde173714301.649497f801aa1.jpg' }}"
                alt="Company Image">
            <div>
                <p><strong>Adres:</strong> {{ $company->adress }}</p>
                <p><strong>Telefoonnummer:</strong> {{ $company->phonenumber }}</p>
                <!-- Add any additional fields as necessary -->
            </div>
        </div>
    </section>
@endsection
