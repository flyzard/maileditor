<?php

declare(strict_types=1);

namespace Flyzard\Maileditor\Observers;

use Flyzard\Maileditor\Models\MailTemplate;

class MailTemplateObserver
{
    public function created(MailTemplate $mailTemplate): void
    {

    }

    public function updated(MailTemplate $mailTemplate): void
    {

    }

    public function deleted(MailTemplate $mailTemplate): void
    {
        //
    }

    public function restored(MailTemplate $mailTemplate): void
    {
        //
    }

    public function forceDeleted(MailTemplate $mailTemplate): void
    {
        //
    }
}
