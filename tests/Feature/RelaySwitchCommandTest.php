<?php

use Nerdmonkey\RelaySwitch\Commands\RelaySwitchCommand;

use function Pest\Laravel\artisan;

it('can display list of switching devices available', function () {
    artisan(RelaySwitchCommand::class)
        ->expectsOutput('All done')
        ->assertExitCode(0);
});
