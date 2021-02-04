<?php


declare(strict_types=1);

namespace Equipment;

use Throwable;

class InvalidParameterException extends  \Exception {



    private $parameterName;
    private $reason;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}