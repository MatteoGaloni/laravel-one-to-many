@extends('layouts.admin')


@section('content')
    <h1>EDIT PROJECT</h1>
    @if ($errors->any())
        <div class="alert">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="needs-validation">
        @csrf
        @method('PUT')



        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="img">URL IMG</label>
            <input type="text" class="form-control" name="img" id="img" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary my-4">Submit</button>

    </form>
@endsection
