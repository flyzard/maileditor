<?php

declare(strict_types=1);

namespace Flyzard\Maileditor\Commands;

use Illuminate\Console\Command;

class MaileditorCommand extends Command
{
    protected $signature = 'maileditor:install';

    protected $description = 'Install Maileditor package';

    public function handle(): int
    {
        // Get base path of the laravel project
        $basePath = base_path();
        $targetDir = $basePath.'/public/vendor/flyzard/';

        if (! is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $source = $basePath.'/vendor/flyzard/maileditor/public/build';
        $target = $targetDir.'maileditor';

        if (symlink($source, $target)) {
            $this->info(PHP_EOL.'Symbolic link created successfully.'.PHP_EOL);

            return self::SUCCESS;
        }

        $this->error(PHP_EOL.'Symbolic link failed.'.PHP_EOL);

        return self::FAILURE;
    }
}
