<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\ValidatorService;
use Framework\TemplateEngine;

class AuthController
{
    public function __construct(
        private TemplateEngine   $view,
        private ValidatorService $validator)
    {

    }

    public function index()
    {
        $this->view->render("register");
    }

    public function register()
    {
        $this->validator->validateRegister($_POST);
    }
}