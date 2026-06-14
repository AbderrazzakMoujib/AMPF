<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    protected array $supported = ['fr', 'en'];

    public function handle(Request $request, Closure $next)
    {
        $locale = 'fr'; // default

        $host = $request->getHost();
        $isLocal = in_array($host, ['localhost', '127.0.0.1', '::1'])
            || str_ends_with($host, '.test')
            || str_ends_with($host, '.local');

        if ($isLocal) {
            // ── LOCAL DEV: read from ?lang= query param ────────────────
            $param = $request->query('lang');
            if ($param && in_array($param, $this->supported)) {
                $locale = $param;
            } else {
                // fallback to session (so it persists between pages)
                $locale = session('locale', 'fr');
            }
        } else {
            // ── PRODUCTION: read from subdomain ────────────────────────
            // en.ampf.ma → 'en'  |  ampf.ma → 'fr'
            $parts     = explode('.', $host);
            $subdomain = count($parts) >= 3 ? $parts[0] : null;
            if ($subdomain && in_array($subdomain, $this->supported)) {
                $locale = $subdomain;
            }
        }

        App::setLocale($locale);
        session(['locale' => $locale]);

        return $next($request);
    }
}
