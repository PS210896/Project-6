@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('tags.store') }}" method="POST">

            @csrf

            <div class="mt-4 form-control">
                <label class="label" for="name">
                    <span class="label-text">Naam</span>
                </label>
                <input type="text" name="name" id="name" class="w-full input input-bordered" placeholder="naam"
                    required>
            </div>


            <button type="submit" class="w-full mt-6 btn btn-success">Aanmaken</button>

        </form>
    </section>
@endsection
