<?php

namespace NGFramer\NGFramerPHPExceptions\exceptions;

use NGFramer\NGFramerPHPExceptions\exceptions\supportive\_BaseException;

class ApiException extends _BaseException
{
    // Constructor for the ApiException.
    public function __construct($message, $code = 0, int $statusCode = 500, array $details = [])
    {
        // Firstly we go for backtrace.
        // Get the error details and update it.
        // We check if it has been set, as this class is also used by another class, and they can pass the backtrace directly.
        $details['backtrace'] = $details['backtrace'] ?? debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        $this->details = $details;

        // Call the parent constructor for exception.
        parent::__construct($message, $code, $statusCode, $details);
    }
}