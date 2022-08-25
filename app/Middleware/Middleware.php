<?php

namespace KrisnaBeaute\BelajarPhpMvc\Middleware;

interface Middleware
{
    function before(): void;
}