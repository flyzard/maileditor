<?php

declare(strict_types=1);

namespace Flyzard\Maileditor\Http\Controllers;

use Flyzard\Maileditor\Http\Requests\EnvelopeRequest;
use Flyzard\Maileditor\Models\Envelope;
use Inertia\Inertia;

class EnvelopeController extends Controller
{
    public function index()
    {
        $envelopes = Envelope::all();

        return Inertia::render('Home', [
            'envelopes' => $envelopes,
        ]);
    }

    public function store(EnvelopeRequest $request)
    {
        Envelope::create($request->validated());

        return to_route('maileditor.index');
    }
}
