<?php

namespace WSColissimo\WSPointRetraitService\Response\ValueObject;

use WSColissimo\WSPointRetraitService\Response\ValueObject\PickupPoint;

/**
 * PickupPointByIDResult
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class PickupPointByIDResult
{
    /**
     * @var integer
     */
    protected $errorCode;

    /**
     * @var string
     */
    protected $errorMessage;

    /**
     * @var PickupPoint
     */
    protected $pointRetraitAcheminement;

    /**
     * Getter for errorCode
     *
     * @return integer
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Setter for errorCode
     *
     * @param integer $errorCode
     *
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Getter for errorMessage
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Setter for errorMessage
     *
     * @param string $errorMessage
     *
     * @return self
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * Getter for pointRetraitAcheminement
     *
     * @return PickupPoint
     */
    public function getPickupPoint()
    {
        return $this->pointRetraitAcheminement;
    }

    /**
     * Setter for pointRetraitAcheminement
     *
     * @param PickupPoint $pointRetraitAcheminement
     *
     * @return self
     */
    public function setPickupPoint($pointRetraitAcheminement)
    {
        $this->pointRetraitAcheminement = $pointRetraitAcheminement;

        return $this;
    }
}
