<?php

declare(strict_types=1);

namespace Flyzard\Maileditor\Http\Controllers;

use Inertia\Inertia;

class MaileditorController extends Controller
{
    public function index()
    {
        // get all emails
        // $emails = \Flyzard\Maileditor\Models\Email::all();

        // Find all emails on the application

        return Inertia::render('Home');
    }
}
