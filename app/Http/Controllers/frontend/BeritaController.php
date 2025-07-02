<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class BeritaController extends Controller
{
    public function index() 
    {
        $response = Http::get('https://berita.murungrayakab.go.id/wp-json/wp/v2/posts?per_page=10');
        $beritas = collect($response->json())->map(function ($berita) {
            // Ambil gambar
        if ($berita['featured_media']) {
            $media = Http::get("https://berita.murungrayakab.go.id/wp-json/wp/v2/media/{$berita['featured_media']}")->json();
            $berita['featured_image'] = $media['source_url'] ?? null;
        } else {
            $berita['featured_image'] = null;
        }

        // Ambil nama penulis
        if ($berita['author']) {
            $user = Http::get("https://berita.murungrayakab.go.id/wp-json/wp/v2/users/{$berita['author']}")->json();
            $berita['author_name'] = $user['name'] ?? 'Anonim';
        } else {
            $berita['author_name'] = 'Anonim';
        }

        return $berita;
    });

        return view('frontend.berita.index', compact('beritas'));
    }
}
