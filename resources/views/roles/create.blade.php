@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('roles.store') }}" method="POST">

            @csrf

            <div class="form-control mt-4">
                <label class="label" for="course">
                    <span class="label-text">Rol naam</span>
                </label>
                <input type="text" name="name" id="name" class="input input-bordered w-full" placeholder="Naam" required>
            </div>

           


            <button type="submit" class="btn btn-success mt-6 w-full">Aanmaken</button>

        </form>
    </section>
@endsection