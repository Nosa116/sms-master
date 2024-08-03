@extends('layouts.master')
@section('page_title', 'Admissions')
@section('content')
<div class="row">
    @foreach($students as $sr)
    <div class="col-md-4 text-center mb-4" id="student-{{ $sr->id }}">
        <div class="card">
            <div class="card-body">
                <img style="width: 100px; height:100px" src="{{ $sr->user->photo }}" alt="photo" class="rounded-circle mb-3">
                <h4>{{ $sr->user->name }}</h4>
                <p>{{ $sr->my_class->name }}</p>

                <form action="{{ route('students.accept', $sr->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                </form>

                <form action="{{ route('students.reject', $sr->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mx-2"><i class="fa-solid fa-xmark"></i></button>
                </form>
                
                <div class="mt-2">
                    <a href="{{ route('students.show', Qs::hash($sr->id)) }}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
