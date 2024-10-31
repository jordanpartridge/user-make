<?php

namespace JordanPartridge\UserMake\Commands;

use Illuminate\Console\Command;

class UserMakeCommand extends Command
{
    public $signature = 'user-make';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
