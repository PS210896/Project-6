@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">
    

        <form action="{{ route('users.update', $user->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-control mt-4">
                <label class="label" for="name">
                    <span class="label-text">Naam</span>
                </label>
                <input type="text" name="name" id="name" class="input input-bordered w-full" placeholder="name"
                    value="{{ $user->name }}">
            </div>
            <div class="form-control mt-4">
                <label class="label" for="email">
                    <span class="label-text">Email</span>
                </label>
                <input type="text" name="email" id="email" class="input input-bordered w-full"
                    placeholder="email" value="{{ $user->email }}" >
            </div>
            <div class="form-control mt-4">
                <label class="label" for="password">
                    <span class="label-text">Password</span>
                </label>
                <input type="text" name="learning_path" id="password" class="input input-bordered w-full"
                    placeholder="password" value="{{ $user->password }}">
            </div>
            <button type="submit" class="btn btn-info mt-6 w-full">Wijzig {{ $user->name }}</button>
        </form>
    </section>
@endsection
