@extends('layouts.default')

{{-- @SECTION FOR THE START CONTENT --}}
@section('content')
    <section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-mdg">

        <div class="w-full inline-flex px-6">
            <h1 class="text-4xl font-bold mb-6">Rollen</h1>

            <div class="ml-auto inline-flex">

                @if (Auth::check() && Auth::user()->id == 1)
                    <a class="btn btn-success ml-4" href="{{ route('roles.create') }}">
                        <button>Creëer rol</button>
                    </a>
                @endif
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-6">
            @foreach ($roles as $role)
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">{{ $role->name }}</h2>
                        <div class="card-actions justify-end mt-3">
                            {{-- EDIT --}}
                            @if (Auth::check() && Auth::user()->id == 1)
                                <a class="btn btn-info w-full" href="{{ route('roles.edit', $role->id) }}">
                                    <button>Wijzigen</button>
                                </a>

                                {{-- DELETE --}}
                                <form class="w-full" action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-error w-full" type="submit">Verwijderen</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $roles->links() }}

    </section>
@endsection
