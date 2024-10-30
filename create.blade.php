@extends('layouts.default')

@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('companies.store') }}" method="POST">
            @csrf

            <div class="form-control mt-4">
                <label class="label" for="name">
                    <span class="label-text">Company Name</span>
                </label>
                <input type="text" name="name" id="name" class="input input-bordered w-full" placeholder="Company Name" required>
            </div>

            <div class="form-control mt-4">
                <label class="label" for="address">
                    <span class="label-text">Address</span>
                </label>
                <input type="text" name="adress" id="address" class="input input-bordered w-full" placeholder="Address" required>
            </div>

            <div class="form-control mt-4">
                <label class="label" for="phonenumber">
                    <span class="label-text">Phone Number</span>
                </label>
                <input type="text" name="phonenumber" id="phonenumber" class="input input-bordered w-full" placeholder="Phone Number" required>
            </div>

            <button type="submit" class="btn btn-success mt-6 w-full">Create</button>

        </form>
    </section>
@endsection
