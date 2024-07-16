<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    const PATH_VIEW = "articles.";

    public function index()
    {
        $data = Article::select("id", "title", "content")->latest("id")->paginate(3);
        return view(self::PATH_VIEW . __FUNCTION__, compact("data"));
    }

    public function viewComment($id)
    {
        $model = Article::where("id", $id)->select("id", "title", "content")->first();
        $comments = $model->comments()->with("user")->paginate(3);
        return view(self::PATH_VIEW . __FUNCTION__, compact("model", "comments"));
    }

    public function avgRate($id)
    {
        $model = Article::where("id", $id)->select("id", "title", "content")->with("rates.user")->first();
        // dd($model->rates);
        $avgRate = $model->rates()->avg("rating");
        return view(self::PATH_VIEW . __FUNCTION__, compact("model", "avgRate"));
    }
}
