@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('users.store') }}" method="POST">

            @csrf

            <div class="form-control mt-4">
                <label class="label" for="course">
                    <span class="label-text">Naam</span>
                </label>
                <input type="text" name="name" id="name" class="input input-bordered w-full" placeholder="Naam"
                    required>
            </div>

            <div class="flex flex-wrap -mx-2">
                <div class="w-full md:w-1/2 px-2">
                    <div class="form-control mt-4">
                        <label class="label" for="modal_start_time">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="text" name="email" id="email" class="input input-bordered w-full"
                            placeholder="Email" required>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <div class="form-control mt-4">
                        <label class="label" for="location">
                            <span class="label-text">Wachtwoord</span>
                        </label>
                        <input type="text" name="password" id="password" class="input input-bordered w-full"
                            placeholder="Wachtwoord" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-6 w-full">Aanmaken</button>

        </form>
    </section>
@endsection
