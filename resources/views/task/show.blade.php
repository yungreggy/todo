@extends('layouts.app')
@section('title', 'Task')
@section('content')
    <h1 class="mt-5 mb-4">Task</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-5">
                <div class="card-header">
                    <h5 class="card-title">{{ $task->title }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $task->description }}</p>
                    <ul class="list-unstyled">
                        <li><strong>Completed:</strong> {{ $task->completed ? 'Yes' : 'No' }}</li>
                        <li><strong>Due Date:</strong> {{ $task->due_date }}</li>
                        <li><strong>Author:</strong> {{ $task->author }}</li>
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between">
                <a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
    Delete
</button>

 {{-- Bootstrap Modal --}}
 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="DeleteModalLabel">DELETE</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Are you sure to delete this task?
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
        </div>
    </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
@endsection