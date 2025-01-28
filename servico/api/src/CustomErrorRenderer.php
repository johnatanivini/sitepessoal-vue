<?php

namespace Api;

use Slim\Interfaces\ErrorRendererInterface;

class CustomErrorRenderer implements ErrorRendererInterface
{

    public function __invoke(\Throwable $exception, bool $displayErrorDetails): string
    {
        return '{code:0, message:"Opps, ocorreu um erro!}';
    }
}
