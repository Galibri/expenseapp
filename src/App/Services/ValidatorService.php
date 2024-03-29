<?php

declare(strict_types=1);

namespace App\Services;

use Framework\Rules\EmailRule;
use Framework\Rules\InRule;
use Framework\Rules\MatchRule;
use Framework\Rules\MinRule;
use Framework\Rules\UrlRule;
use Framework\Validator;
use Framework\Rules\RequiredRule;

class ValidatorService
{
    private Validator $validator;

    public function __construct()
    {
        $this->validator = new Validator();
        $this->validator->add('required', new RequiredRule());
        $this->validator->add('email', new EmailRule());
        $this->validator->add('min', new MinRule());
        $this->validator->add('in', new InRule());
        $this->validator->add('url', new UrlRule());
        $this->validator->add('match', new MatchRule());
    }

    public function validateRegister(array $formData)
    {
        $this->validator->validate($formData, [
            'email' => ['required', 'email'],
            'age' => ['required', 'min:18'],
            'country' => ['required', 'in:USA,Canada,Mexico'],
            'social_media_url' => ['required', 'url'],
            'password' => ['required'],
            'confirm_password' => ['required', 'match:password'],
            'tos' => ['required'],
        ]);
    }
}