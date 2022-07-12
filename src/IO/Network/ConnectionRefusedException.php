<?php

declare(strict_types=1);

namespace Qubus\Exception\IO\Network;

use Qubus\Exception\IO\IOException;
use Throwable;

class ConnectionRefusedException extends IOException
{
    public function __construct(
        string $message = 'Connection lost while exchanging data with remote host.',
        int $code = 403,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
