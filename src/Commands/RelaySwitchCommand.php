<?php

namespace Nerdmonkey\RelaySwitch\Commands;

use Illuminate\Console\Command;

class RelaySwitchCommand extends Command
{
    public $signature = 'switch:list';

    public $description = 'List all the switch and assigned pins';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
