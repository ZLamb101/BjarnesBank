<?php
namespace agilman\a2\exception;
/**
 * Created by PhpStorm.
 * User: Jordan & Zane
 * Date: 21/09/2018
 * Time: 12:41 PM
 */
use Exception;

class EmptyFieldException extends Exception
{
  /**
     * DBException constructor.
     * @param $mName
     */
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }


    public function __toString()
    {
        return $this->message;
    }
}
