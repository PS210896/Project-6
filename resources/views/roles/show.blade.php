@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section>
        {{-- <a href="{{route('companies.edit', $product->id)}}">
            <button class="btn btn-info ml-auto">Edit Mode</button>
        </a> --}}

        <div class="grid grid-cols-2 gap-6 p-6">
            <img class="h-[300px]"
                src="{{ $role->image ?? 'https://mir-s3-cdn-cf.behance.net/project_modules/1400/683bde173714301.649497f801aa1.jpg' }}"
                alt="Internship Image">
            <div>
                <p class="text-2xl mb-6 capitalize font-bold">{{ $role->name }}</p>
                

            </div>
        </div>
    </section>
@endsection
