<?php

namespace Flyzard\Maileditor\Http\Controllers;

class MaileditorController extends Controller
{
    public function index()
    {
        // get all emails
        // $emails = \Flyzard\Maileditor\Models\Email::all();

        return view('maileditor::index');
    }
}
