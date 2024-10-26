<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class NewsController extends Controller
{
    // Menampilkan daftar berita
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Ambil semua berita beserta kategori
        $newsQuery = News::with('category')->orderByDesc('created_at');

        // Jika ada kata kunci pencarian, filter berita
        if ($search) {
            $newsQuery->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%');
            });
        }

        $news = $newsQuery->paginate(12); // Batasi 12 berita per halaman

        // Jika request meminta JSON (misalnya untuk API)
        if ($request->wantsJson()) {
            return response()->json($news);
        }

        $topViewsNews = News::with('category')
            ->orderByDesc('views')
            ->take(5)
            ->get();

        $recentNews = News::with('category')
            ->orderByDesc('created_at')
            ->take(5)
            ->get();

        $recentNewsHeader = News::with('category')
            ->orderByDesc('created_at')
            ->take(12)
            ->get();

        $categories = Category::withCount('news')->get();

        $newsByCategory = [];
        foreach ($categories as $category) {
            $newsByCategory[$category->id] = News::with('category')
                ->where('category_id', $category->id)
                ->orderByDesc('created_at')
                ->take(8)
                ->get();
        }

        return view('news.index', compact('news', 'categories', 'topViewsNews', 'recentNews', 'search', 'recentNewsHeader', 'newsByCategory'));
    }

    // Menyimpan berita baru melalui API
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $news = News::create([
            'name' => $validatedData['name'],
            'content' => $validatedData['content'],
            'category_id' => $validatedData['category_id'],
            'slug' => Str::slug($validatedData['name']),
        ]);

        return response()->json($news, 201);
    }

    // Mengupdate berita melalui API
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'category_id' => 'sometimes|required|exists:categories,id',
        ]);

        $news->update($validatedData);

        return response()->json($news);
    }

    // Menampilkan detail berita berdasarkan slug
    public function show(Request $request, $slug)
    {
        $recentNews = News::with('category')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        $newsItem = News::where('slug', $slug)->with('category')->firstOrFail();
        $newsItem->increment('views');

        if ($request->wantsJson()) {
            return response()->json($newsItem);
        }

        $categories = Category::withCount('news')->get();

        $popularNews = News::with('category')
            ->orderByDesc('views')
            ->take(3)
            ->get();

        $randomNews = News::with('category')
            ->inRandomOrder()
            ->take(8)
            ->get();

        return view('news.show', compact('newsItem', 'categories', 'popularNews', 'randomNews', 'recentNews'));
    }

    // Menampilkan berita berdasarkan kategori
    public function category(Request $request, $slug)
    {
        $popularNews = News::with('category')
            ->orderByDesc('views')
            ->take(3)
            ->get();

        $recentNews = News::with('category')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        $search = $request->input('search');
        $category = Category::where('slug', $slug)->firstOrFail();

        $newsQuery = News::with('category')
            ->where('category_id', $category->id)
            ->orderByDesc('created_at');

        if ($search) {
            $newsQuery->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%');
            });
        }

        $news = $newsQuery->paginate(12);

        if ($request->wantsJson()) {
            return response()->json([
                'category' => $category,
                'news' => $news,
                'popularNews' => $popularNews,
                'recentNews' => $recentNews,
            ]);
        }

        $categories = Category::withCount('news')->get();

        return view('news.category', compact('news', 'categories', 'category', 'search', 'popularNews', 'recentNews'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $newsQuery = News::with('category')->where(function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('content', 'like', '%' . $search . '%');
        });

        $news = $newsQuery->paginate(12);

        $categories = Category::withCount('news')->get();

        $popularNews = News::with('category')
            ->orderByDesc('views')
            ->take(3)
            ->get();

        $recentNews = News::with('category')
            ->orderByDesc('created_at')
            ->take(3)
            ->get();

        if ($request->wantsJson()) {
            return response()->json([
                'news' => $news,
                'categories' => $categories,
                'popularNews' => $popularNews,
                'recentNews' => $recentNews,
            ]);
        }

        return view('news.search', compact('news', 'categories', 'search', 'recentNews', 'popularNews'));
    }
}
