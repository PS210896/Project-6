@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        <div class="grid grid-cols-2 gap-6 p-6">
            <img class="h-[300px]"
                src="{{ $contract->image ?? 'https://mir-s3-cdn-cf.behance.net/project_modules/1400/683bde173714301.649497f801aa1.jpg' }}"
                alt="Contract Image">
            <div>
                <p class="text-2xl mb-6 capitalize font-bold">{{ $contract->course }}</p>
                <p><strong>Studierichting:</strong> {{ $contract->learning_path }}</p>
                <p><strong>Locatie:</strong> {{ $contract->location }}</p>
                <p><strong>Van:</strong> {{ $contract->from }}</p>
                <p><strong>Plekken beschikbaar:</strong> {{ $contract->spaces_left }}</p>
                <p><strong>Vergoeding:</strong> {{ $contract->compensation ?? 'Geen' }}</p>
            </div>
        </div>
    </section>
@endsection
