<?php

namespace SymfonyIssue51698\Controller;

use SymfonyIssue51698\Service;

class Main
{
    private ?Service\Display $displayService = null;
    public function __construct(private string $greeting)
    {
    }

    public function customInjection(Service\Display $displayService)
    {
        $this->displayService = $displayService;
    }

    public function index()
    {
        $this->displayService->display($this->greeting);
    }
}
