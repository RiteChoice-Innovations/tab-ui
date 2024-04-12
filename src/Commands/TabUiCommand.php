<?php

namespace RiteChoice Innovations\TabUi\Commands;

use Illuminate\Console\Command;

class TabUiCommand extends Command
{
    public $signature = 'tab-ui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
