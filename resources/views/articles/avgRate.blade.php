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
                    <th>Rate</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($model->rates as $item)
                    <tr>
                        <td>
                            {{ $item->user->name }}
                        </td>
                        <td>
                            {{ $item->rating }}
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <td colspan="2" class="text-end"><strong>Average Rate:</strong> {{ number_format($avgRate, 1) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
