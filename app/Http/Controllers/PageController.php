<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Article;
use App\Models\Incubator;
use App\Models\Recruitment;
use App\Models\About;

class PageController extends Controller
{
    public function home()
    {
        $about = \App\Models\About::first();
        $programs = \App\Models\Program::latest()->take(3)->get();
        $articles = \App\Models\Article::where('is_published', true)->latest()->take(3)->get();
        $galleries = \App\Models\Gallery::latest()->take(8)->get();
        $agendas = \App\Models\Agenda::where('is_active', true)
                        ->orderBy('date', 'asc')
                        ->get();
        return view('welcome', compact('about', 'programs', 'articles', 'galleries', 'agendas'));
    }

    public function about()
    {
        $about = About::first();
        return view('pages.about', compact('about'));
    }

    public function programs()
    {
        $programs = Program::latest()->get();
        return view('pages.programs', compact('programs'));
    }

    public function incubators()
    {
        $incubators = Incubator::latest()->get();
        return view('pages.incubators', compact('incubators'));
    }

    public function recruitments()
    {
        $recruitments = Recruitment::where('is_open', true)->latest()->get();
        return view('pages.recruitments', compact('recruitments'));
    }

    public function articles(Request $request)
    {
        $query = Article::where('is_published', true);

        if ($request->has('q') && $request->q != '') {
            $search = $request->q;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $articles = $query->latest()->paginate(9);
        return view('pages.articles', compact('articles'));
    }

    public function articleDetail($id)
    {
        $article = Article::where('is_published', true)->findOrFail($id);
        $latestArticles = Article::where('is_published', true)->where('id', '!=', $id)->latest()->take(5)->get();
        return view('pages.articles_show', compact('article', 'latestArticles'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
