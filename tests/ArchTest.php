<?php

declare(strict_types=1);

it(description: 'will not use debugging functions')
    ->expect(['dd', 'dump', 'var_dump', 'ray'])
    ->each->not->toBeUsed();
