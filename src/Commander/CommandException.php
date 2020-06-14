<?php declare(strict_types=1);

namespace Useful\Commander;

use RuntimeException;
use Useful\Commander\Lang;

class CommandException extends RuntimeException
{
    public static function argvNotEnabled(): self
    {
        return new CommandException(Lang\CommandException::get('ARGV_NOT_ENABLED');
    }
}