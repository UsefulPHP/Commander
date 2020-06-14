<?php declare(strict_types=1);

namespace Useful\Commander;

class Command implements CommandInterface
{
    private array $arguments;

    public function __construct(array $arguments = [])
    {
        $this->arguments = $arguments;
    }

    public static function fromExec(): CommandInterface
    {
        $className = static::class;

        if (ini_get('register_argc_argv')) {
            return (new $className([]))->withArguments($_SERVER['argv']);
        } else {
            throw CommandException::argvNotEnabled();
        }
    }

}