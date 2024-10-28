@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('internships.store') }}" method="POST">

            @csrf

            <div class="mt-4 form-control">
                <label class="label" for="course">
                    <span class="label-text">Cursus</span>
                </label>
                <input type="text" name="course" id="course" class="w-full input input-bordered" placeholder=""
                    required>
            </div>

            <div class="mt-4 form-control">
                <label class="label" for="image_url">
                    <span class="label-text">Afbeelding URL</span>
                </label>
                <input type="text" name="image_url" id="image_url" class="w-full input input-bordered" placeholder=""
                    required>
            </div>

            <div class="flex flex-wrap -mx-2">
                <div class="w-full px-2 md:w-1/2">
                    <div class="mt-4 form-control">
                        <label class="label" for="learning_path">
                            <span class="label-text">Leerweg</span>
                        </label>
                        <input type="text" name="learning_path" id="learning_path" class="w-full input input-bordered"
                            placeholder="" required>
                    </div>
                </div>
                <div class="w-full px-2 md:w-1/2">
                    <div class="mt-4 form-control">
                        <label class="label" for="location">
                            <span class="label-text">Locatie</span>
                        </label>
                        <input type="text" name="location" id="location" class="w-full input input-bordered"
                            placeholder="" required>
                    </div>
                </div>
            </div>

            <div class="mt-4 form-control">
                <label class="label" for="from">
                    <span class="label-text">Van</span>
                </label>
                <input type="date" name="from" id="from" class="w-full input input-bordered" placeholder=""
                    required>
            </div>
            <div class="mt-4 form-control">
                <label class="label" for="spaces_left">
                    <span class="label-text">Plekken beschikbaar</span>
                </label>
                <input type="text" name="spaces_left" id="spaces_left" class="w-full input input-bordered"
                    placeholder="">
            </div>
            <div class="mt-4 form-control">
                <label class="label" for="compensation">
                    <span class="label-text">Stagevergoeding</span>
                </label>
                <input type="text" name="compensation" id="compensation" class="w-full input input-bordered"
                    placeholder="0.00">
            </div>

            <button type="submit" class="w-full mt-6 btn btn-success">Aanmaken</button>

        </form>
    </section>
@endsection
