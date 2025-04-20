<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Location; // <-- Add Location model
use App\Models\Cta;      // <-- Add Cta model

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data yang dibutuhkan untuk halaman home
        $services = Service::where('is_active', true)->get(); // Example: fetch only active services
        $about = About::first();
        $portfolios = Portfolio::with('category')->where('is_active', true)->get(); // Example: fetch only active portfolios
        $portfolioCategories = PortfolioCategory::has('portfolios')->get(); // Example: fetch only categories with portfolios

        $locations = Location::where('is_active', true)->get(); // <-- Fetch active locations
        $ctas = Cta::where('is_active', true)->get();          // <-- Fetch active CTAs

        // Kirim data ke view 'home'
        return view('home', [
            'services' => $services,
            'about' => $about,
            'portfolios' => $portfolios,
            'portfolioCategories' => $portfolioCategories,
            'locations' => $locations, // <-- Pass locations
            'ctas' => $ctas,           // <-- Pass CTAs
        ]);
    }
}
