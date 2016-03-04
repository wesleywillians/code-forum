<?php

namespace CodeEdu\CodeForum\Controllers;

use App\Http\Requests;
use CodeEdu\CodeForum\Models\Topic;

class ForumController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        return view('codeforum::forum.index', ['topics'=>$topics]);
    }

    public function topic($id)
    {
        $topic = Topic::findOrFail($id);
        return view('codeforum::forum.topic', compact('topic'));
    }
}
