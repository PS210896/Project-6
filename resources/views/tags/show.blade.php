@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        <div class="grid grid-cols-2 gap-6 p-6">
            <p class="mb-6 text-2xl font-bold capitalize">{{ $tag->name }}</p>
        </div>
    </section>
@endsection
