<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as RouteFacade;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $urls = collect(RouteFacade::getRoutes())
            ->filter(fn (Route $route) => in_array('GET', $route->methods(), true))
            ->reject(fn (Route $route) => $route->uri() === 'sitemap.xml')
            ->reject(fn (Route $route) => $route->uri() === 'up')
            ->reject(fn (Route $route) => str_contains($route->uri(), '{'))
            ->map(fn (Route $route) => [
                'url' => url($route->uri() === '/' ? '/' : '/'.$route->uri()),
            ])
            ->unique('url')
            ->sortBy('url')
            ->values();

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
