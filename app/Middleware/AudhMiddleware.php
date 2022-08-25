<?php

namespace KrisnaBeaute\BelajarPhpMvc\Middleware;

class AudhMiddleware implements Middleware
{
    function before(): void
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
    }

}