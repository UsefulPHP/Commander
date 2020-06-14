<?php

namespace Useful\Commander\Lang;

class CommandException extends Useful\Lang
{
    const FALLBACK = 'en_GB';
    const DEFINITIONS = [
        'en_GB' => __DIR__ . '/langDefs/en_GB.php'
    ];
}