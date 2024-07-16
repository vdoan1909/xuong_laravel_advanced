<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    const PATH_VIEW = "videos.";

    public function index()
    {
        $data = Video::latest("id")->paginate(3);
        return view(self::PATH_VIEW . __FUNCTION__, compact("data"));
    }

    public function viewRate($id)
    {
        $model = Video::where("id", $id)->select("id", "title", "url")->first();
        $rates = $model->rates()->with("user")->paginate(3);
        return view(self::PATH_VIEW . __FUNCTION__, compact("model", "rates"));
    }
}
