<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Mysql;
use App\Models\Article;

class HomeController extends Controller
{
  public function home(Request $request)
  {
    $articles = Article::orderBy('created_at', 'DESC')->simplePaginate(10);

    return view('welcome', ['articles' => $articles]);
  }

  public function article(Request $request, $article)
  {
    $article = \App\Models\Article::find($article);
    return view('article', ['article' => $article]);
  }

  public function search(Request $request)
  {
    $token = $request->session()->token();

    if ($_POST['_token'] == $token) {
      $mysql = new Mysql;

      $articles = $mysql->like('articles', '*', ['title' => addslashes($request->search)]);

      if(!$articles) $articles = [];

      return view('search', [
        'articles' => $articles,
        'search' => addslashes($request->search)
      ]);
    }

    return back()->withErrors(['welcome' => 'CSRF token is invalid.']);
  }

  public function addComment(Request $request)
  {

    $token = $request->session()->token();

    if ($_POST['_token'] == $token) {
      $mysql = new Mysql;

      $mysql->insert('comments', [
        'author' => $request->author,
        'message' => addslashes($request->message),
        'article_id' => $request->article_id,
      ]);

      return redirect()->route('home.article', $request->article_id);
    }

    return back()->withErrors(['article' => 'CSRF token is invalid.']);


  }
}
