<?php namespace Sightseeing\Exceptions;

use Exception;

/**
 * Class ValidationException
 * @package Sightseeing\Exceptions
 */
class ValidationException extends Exception {

    protected $errors;

    function __construct($message, array $errors, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    /**
     * @return array errors stored in the Exception
     */
    public function getErrors()
    {
        return $this->errors;
    }

} 