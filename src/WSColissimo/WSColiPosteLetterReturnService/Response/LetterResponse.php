<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Response;

use WSColissimo\Common\Response\ReponseInterface;
use WSColissimo\WSColiPosteLetterReturnService\Response\ValueObject\ReturnLetter;

/**
 * LetterColissimoResponse
 *
 * @author @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class LetterResponse implements ReponseInterface
{
    /**
     * @var ReturnLetter
     */
    protected $returnLetter;

    /**
     * @return ReturnLetter
     */
    public function getReturnLetter()
    {
        return $this->returnLetter;
    }

    /**
     * @param ReturnLetter $returnLetter
     */
    public function setReturnLetter(ReturnLetter $returnLetter)
    {
        $this->returnLetter = $returnLetter;
    }

    /**
     * Is response successful ?
     *
     * @return boolean
     */
    public function isSuccess()
    {
        if ($this->returnLetter instanceof ReturnLetter
                && $this->returnLetter->errorID === 0) {
            return true;
        }

        return false;
    }

    /**
     * Get error message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        if ($this->returnLetter instanceof ReturnLetter
                && $this->returnLetter->errorID !== 0) {
            return $this->returnLetter->error;
        }
    }

    /**
     * Setter
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        if ($name === 'ReturnLetter') {
            return $this->setReturnLetter($value);
        }
    }

}
