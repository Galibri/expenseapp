<?php

declare(strict_types=1);

function dd($input)
{
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
    die();
}

function e(mixed $value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function redirectTo(string $path): void
{
    header("Location: {$path}");
    http_response_code(302);
    exit;
}

function selected($value, $compareTo, $echo = true)
{
    $result = ($value == $compareTo) ? 'selected' : '';
    if ($echo) {
        echo $result;
    } else {
        return $result;
    }
}