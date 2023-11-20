<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class MinRule implements RuleInterface
{

    public function validate(array $formData, string $field, array $params): bool
    {
        if (empty($params[0])) {
            throw new \Exception('MinRule rule expects at least one parameter');
        }

        return $formData[$field] >= (int)$params[0];
    }

    public function getMessage(array $formData, string $field, array $params): string
    {
        return 'The ' . $field . ' field must be at least ' . $params[0];
    }
}