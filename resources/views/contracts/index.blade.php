@extends('layouts.default')

@section('content')
    <h1>Contracts</h1>
    <a href="{{ route('contracts.create') }}" class="btn btn-primary mb-4">Create New Contract</a>

    <section class="mx-auto py-8 px-12 bg-base-100 rounded-md shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($contracts as $contract)
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                    <!-- Wraps the main card body in an anchor to make it clickable -->
                    <a href="{{ route('contracts.show', $contract->id) }}" class="block p-4">
                        <div class="card-body">
                            <h2 class="card-title">{{ $contract->course }}</h2>
                            <p><strong>Learning Path:</strong> {{ $contract->learning_path }}</p>
                            <p><strong>Location:</strong> {{ $contract->location }}</p>
                            <p><strong>Spaces Left:</strong> {{ $contract->spaces_left }}</p>
                        </div>
                    </a>

                    <!-- Edit/Delete buttons inside the card, outside the clickable area for show page -->
                    <div class="card-footer flex justify-end p-4 space-x-2 border-t">
                        <a href="{{ route('contracts.edit', $contract->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('contracts.destroy', $contract->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $contracts->links() }}
    </section>
@endsection
