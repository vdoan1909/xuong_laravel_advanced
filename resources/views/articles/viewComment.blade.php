@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h1>
                <b>Article:</b> {{ $model->title }}
            </h1>

            <div>
                <a class="btn btn-secondary" href="{{ route('article.index') }}">Back</a>
            </div>
        </div>

        <hr>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Content</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($comments as $item)
                    <tr>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $comments->links() }}
    </div>
@endsection
