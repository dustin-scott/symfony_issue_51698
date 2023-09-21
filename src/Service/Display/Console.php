<?php

namespace SymfonyIssue51698\Service\Display;

use SymfonyIssue51698\Service;

class Console implements Service\Display
{
    public function display(string $data): void
    {
        echo $data . PHP_EOL;
    }
}
