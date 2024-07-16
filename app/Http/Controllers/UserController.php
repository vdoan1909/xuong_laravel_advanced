<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Image;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class UserController extends Controller
{
    const PATH_VIEW = "user.";

    public function index()
    {
        $data = User::select("id", "name", "email")->latest("id")->paginate(3);
        return view(self::PATH_VIEW . __FUNCTION__, compact("data"));
    }

    public function viewComment($id)
    {
        $model = User::where("id", $id)->select("id", "name", "email")->first();

        $comments = Article::join("comments", "comments.commentable_id", "=", "articles.id")
            ->where("comments.commentable_type", "=", Article::class)
            ->where("user_id", $id)
            ->select("articles.title", "comments.content")
            ->get();

        return view(self::PATH_VIEW . __FUNCTION__, compact("model", "comments"));
    }

    public function getUserComments($id)
    {
        // Lấy tất cả các bình luận của người dùng theo ID
        $comments = Comment::where('user_id', $id)->get();

        $articleComments = $comments->filter(function ($comment) {
            return $comment->commentable_type == Article::class;
        });

        $videoComments = $comments->filter(function ($comment) {
            return $comment->commentable_type == Video::class;
        });

        $imageComments = $comments->filter(function ($comment) {
            return $comment->commentable_type == Image::class;
        });

        $articles = Article::whereIn('id', $articleComments->pluck('commentable_id'))->get();
        $videos = Video::whereIn('id', $videoComments->pluck('commentable_id'))->get();
        $images = Image::whereIn('id', $imageComments->pluck('commentable_id'))->get();

        return view(self::PATH_VIEW . __FUNCTION__, compact('articles', 'videos', 'images'));
    }

}
