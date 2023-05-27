<?php

declare(strict_types=1);

namespace Flyzard\Maileditor\Http\Controllers;

use Flyzard\Maileditor\Http\Requests\MailTemplateRequest;
use Flyzard\Maileditor\Models\MailTemplate;
use Inertia\Inertia;

class MaileditorController extends Controller
{
    public function index()
    {
        return Inertia::render('Mailtemplate/Index', [
            'mailTemplates' => MailTemplate::all(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Mailtemplate/Create');
    }

    public function edit(MailTemplate $mailTemplate)
    {
        return Inertia::render('Mailtemplate/Edit', [
            'mailTemplate' => $mailTemplate,
        ]);
    }

    public function update(MailTemplateRequest $mailTemplate)
    {
        $mailTemplate->update($mailTemplate->validated());

        return to_route('maileditor.index');
    }

    public function store(MailTemplateRequest $mailTemplate)
    {
        MailTemplate::create($mailTemplate->validated());

        return to_route('maileditor.index');
    }

    public function destroy(MailTemplate $mailTemplate)
    {
        $mailTemplate->delete();

        return to_route('maileditor.index');
    }
}
