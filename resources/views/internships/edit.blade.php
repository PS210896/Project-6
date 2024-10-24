@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        <form action="{{ route('internships.update', $internship->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-control mt-4">
                <label class="label" for="course">
                    <span class="label-text">Cursus</span>
                </label>
                <input type="text" name="course" id="course" class="input input-bordered w-full" placeholder=""
                    value="{{ $internship->course }}" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="learning_path">
                    <span class="label-text">Leerweg</span>
                </label>
                <input type="text" name="learning_path" id="learning_path" class="input input-bordered w-full"
                    placeholder="" value="{{ $internship->learning_path }}" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="location">
                    <span class="label-text">Locatie</span>
                </label>
                <input type="text" name="location" id="location" class="input input-bordered w-full" placeholder=""
                    value="{{ $internship->location }}" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="from">
                    <span class="label-text">Van</span>
                </label>
                <input type="date" name="from" id="from" class="input input-bordered w-full" placeholder=""
                    value="{{ $internship->from }}" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="spaces_left">
                    <span class="label-text">Plekken beschikbaar</span>
                </label>
                <input type="text" name="spaces_left" id="spaces_left" class="input input-bordered w-full" placeholder=""
                    value="{{ $internship->spaces_left }}">
            </div>
            <div class="form-control mt-4">
                <label class="label" for="compensation">
                    <span class="label-text">Stagevergoeding</span>
                </label>
                <input type="text" name="compensation" id="compensation" class="input input-bordered w-full"
                    placeholder="" value="{{ $internship->compensation }}">
            </div>

            <button type="submit" class="btn btn-info mt-6 w-full">Edit {{ $internship->course }}</button>

        </form>
    </section>
@endsection
