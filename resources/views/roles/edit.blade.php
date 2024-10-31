@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        <form action="{{ route('roles.update', $role->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-control mt-4">
                <label class="label" for="course">
                    <span class="label-text">Naam rol</span>
                </label>
                <input type="text" name="name" id="name" class="input input-bordered w-full" placeholder="Course"
                    value="{{ $role->name }}" required>
            </div>
           

            <button type="submit" class="btn btn-info mt-6 w-full">Edit {{ $role->course }}</button>

        </form>
    </section>
@endsection
