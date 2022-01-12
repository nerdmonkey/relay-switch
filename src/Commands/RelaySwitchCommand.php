<?php

namespace Nerdmonkey\RelaySwitch\Commands;

use Illuminate\Console\Command;

class RelaySwitchCommand extends Command
{
    public $signature = 'relay-switch';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
