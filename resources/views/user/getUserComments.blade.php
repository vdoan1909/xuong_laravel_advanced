@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h1>User Comments</h1>
            <div>
                <a class="btn btn-secondary" href="{{ route('user.index') }}">Back</a>
            </div>
        </div>

        <h3>Articles</h3>
        @if ($articles->isEmpty())
            <p>No articles commented by this user.</p>
        @else
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <h3>Video</h3>
        @if ($videos->isEmpty())
            <p>No video commented by this user.</p>
        @else
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($videos as $video)
                        <tr>
                            <td>{{ $video->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <h3>Image</h3>
        @if ($images->isEmpty())
            <p>No image commented by this user.</p>
        @else
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($images as $image)
                        <tr>
                            <td>{{ $image->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
