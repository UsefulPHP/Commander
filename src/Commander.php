<?php declare(strict_types=1);

namespace Useful;

use Useful\Commander\Command;

class Commander
{
    /**
     * @return int
     */
    public function run(Command $command): int
    {
        try {

        } catch (\Exception $e) {
            print("Unhandled Exception: " . $e->getMessage());
            $code = $e->getCode();
            if (!is_int($code)) {
                $code = -1;
            }
            return $code;
        }
    }
}