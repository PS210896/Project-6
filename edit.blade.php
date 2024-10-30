@extends('layouts.default')

@section('content')
    <section class="w-[30%] mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">

        <form action="{{ route('companies.update', $company->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-control mt-4">
                <label class="label" for="name">
                    <span class="label-text">Company Name</span>
                </label>
                <input type="text" name="name" id="name" class="input input-bordered w-full" placeholder="Company Name"
                    value="{{ $company->name }}" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="adress">
                    <span class="label-text">Address</span>
                </label>
                <input type="text" name="adress" id="adress" class="input input-bordered w-full"
                    placeholder="Address" value="{{ $company->adress }}" required>
            </div>
            <div class="form-control mt-4">
                <label class="label" for="phonenumber">
                    <span class="label-text">Phone Number</span>
                </label>
                <input type="text" name="phonenumber" id="phonenumber" class="input input-bordered w-full"
                    placeholder="Phone Number" value="{{ $company->phonenumber }}" required>
            </div>

            <button type="submit" class="btn btn-info mt-6 w-full">Edit {{ $company->name }}</button>

        </form>
    </section>
@endsection
