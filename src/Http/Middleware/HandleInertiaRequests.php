<?php

declare(strict_types=1);

namespace Flyzard\Maileditor\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'maileditor::app';

    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    public function share(Request $request): array
    {
        return array_merge(
            parent::share($request),
            [
                'flash' => function () use ($request) {
                    return [
                        'success' => $request->session()->get('success'),
                        'error' => $request->session()->get('error'),
                        'toast' => $request->session()->get('toast'),
                    ];
                },
                'optedUri' => request()->segment(1),
            ]
        );
    }
}
