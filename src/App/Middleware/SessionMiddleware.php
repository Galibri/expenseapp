<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\MiddlewareInterface;
use App\Exceptions\SessionException;

class SessionMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            throw new SessionException('Session already started.');
        }

        if (headers_sent($filename, $line)) {
            throw new SessionException(
                sprintf('Headers already sent in %s on line %s', $filename, $line)
            );
        }

        session_start();

        $next();

        session_write_close();
    }
}