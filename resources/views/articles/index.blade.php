@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Manage</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->content }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('article.viewComment', $item->id) }}">View comment</a>
                            <a class="btn btn-primary" href="{{ route('article.avgRate', $item->id) }}">View rate</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $data->links() }}
    </div>
@endsection
