@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Url</th>
                    <th>Manage</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ $item->url }}">Click here</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('video.viewRate', $item->id) }}">View rate</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $data->links() }}
    </div>
@endsection
