@extends('layouts.default')

@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        <form action="{{ route('contracts.update', $contract->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-control mt-4">
                <label class="label" for="course">
                    <span class="label-text">Cursus</span>
                </label>
                <input type="text" name="course" id="course" class="input input-bordered w-full" placeholder="Course"
                    value="{{ $contract->course }}" required>
            </div>

            <div class="form-control mt-4">
                <label class="label" for="learning_path">
                    <span class="label-text">Studie richting</span>
                </label>
                <input type="text" name="learning_path" id="learning_path" class="input input-bordered w-full"
                    placeholder="Learning Path" value="{{ $contract->learning_path }}" required>
            </div>

            <div class="form-control mt-4">
                <label class="label" for="location">
                    <span class="label-text">Locatie</span>
                </label>
                <input type="text" name="location" id="location" class="input input-bordered w-full"
                    placeholder="Location" value="{{ $contract->location }}" required>
            </div>

            <div class="form-control mt-4">
                <label class="label" for="from">
                    <span class="label-text">Start Date</span>
                </label>
                <input type="date" name="from" id="from" class="input input-bordered w-full"
                    placeholder="Start Date" value="{{ $contract->from }}" required>
            </div>

            <div class="form-control mt-4">
                <label class="label" for="spaces_left">
                    <span class="label-text">Spaces Left</span>
                </label>
                <input type="number" name="spaces_left" id="spaces_left" class="input input-bordered w-full"
                    placeholder="Spaces Left" value="{{ $contract->spaces_left }}" required>
            </div>

            <div class="form-control mt-4">
                <label class="label" for="compensation">
                    <span class="label-text">Compensation</span>
                </label>
                <input type="text" name="compensation" id="compensation" class="input input-bordered w-full"
                    placeholder="Compensation" value="{{ $contract->compensation }}" required>
            </div>

            <button type="submit" class="btn btn-info mt-6 w-full">Edit {{ $contract->course }}</button>

        </form>
    </section>
@endsection
