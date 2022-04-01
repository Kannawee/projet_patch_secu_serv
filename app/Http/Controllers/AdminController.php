<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Mysql;
use App\Models\Article;

class AdminController extends Controller
{
  public function index(Request $request)
  { 
    $articles = Article::all();
    return view('admin.index', ['articles' => $articles]);
  }

  public function addArticle(Request $request)
  {
      $token = $request->session()->token();

      if ($token == $_POST['_token']) {

        $article = new Article;
        $article->content = addslashes($request->content);
        $article->title = addslashes($request->title);
        $article->save();

        return redirect()->route('home');
      }

      return back()->withErrors(['admin.index' => 'CSRF token is invalid.']);
  }
}
