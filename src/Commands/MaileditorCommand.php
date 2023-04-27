<?php

namespace Flyzard\Maileditor\Commands;

use Illuminate\Console\Command;

class MaileditorCommand extends Command
{
    public $signature = 'maileditor';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
