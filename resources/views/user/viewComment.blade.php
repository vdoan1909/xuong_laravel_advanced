@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h1>
                <b>User:</b> {{ $model->name }}
            </h1>

            <div>
                <a class="btn btn-secondary" href="{{ route('user.index') }}">Back</a>
            </div>
        </div>

        <hr>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Comment</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($comments as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
