@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="card p-0 mb-4" style="width: 36rem;">
                <img class="card-img-top" src="{{ $project->img }}" alt="{{ $project->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <a class="btn btn-primary" href="{{ route('admin.projects.edit', $project) }}">Edit Project</a>
                </div>
            </div>
        </div>
    </div>
@endsection
