@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h1>
                <b>Video:</b> {{ $model->title }}
            </h1>

            <div>
                <a class="btn btn-secondary" href="{{ route('video.index') }}">Back</a>
            </div>
        </div>

        <hr>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Rating</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($rates as $item)
                    <tr>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->rating }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $rates->links() }}
    </div>
@endsection
