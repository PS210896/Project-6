@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Validation Error Display --}}
        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contracts.store') }}" method="POST">
            @csrf

            <div class="form-control mt-4">
                <label class="label" for="course">
                    <span class="label-text">Cursus</span>
                </label>
                <input type="text" name="course" id="course" class="input input-bordered w-full" placeholder="Course" required>
            </div>

            <div class="flex flex-wrap -mx-2">
                <div class="w-full md:w-1/2 px-2">
                    <div class="form-control mt-4">
                        <label class="label" for="learning_path">
                            <span class="label-text">Studierichting</span>
                        </label>
                        <input type="text" name="learning_path" id="learning_path" class="input input-bordered w-full"
                               placeholder="Learning Path" required>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <div class="form-control mt-4">
                        <label class="label" for="location">
                            <span class="label-text">Locatie</span>
                        </label>
                        <input type="text" name="location" id="location" class="input input-bordered w-full"
                               placeholder="Location" required>
                    </div>
                </div>
            </div>

            <div class="form-control mt-4">
                <label class="label" for="from">
                    <span class="label-text">Van</span>
                </label>
                <input type="date" name="from" id="from" class="input input-bordered w-full" placeholder="From" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="spaces_left">
                    <span class="label-text">Plekken beschikbaar</span>
                </label>
                <input type="number" name="spaces_left" id="spaces_left" class="input input-bordered w-full"
                       placeholder="Spaces Left">
            </div>
            <div class="form-control mt-4">
                <label class="label" for="compensation">
                    <span class="label-text">Categorie vergoeding</span>
                </label>
                <input type="text" name="compensation" id="compensation" class="input input-bordered w-full"
                       placeholder="Compensation">
            </div>

            <button type="submit" class="btn btn-success mt-6 w-full">Aanmaken</button>
        </form>
    </section>
@endsection
