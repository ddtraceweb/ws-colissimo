<?php

namespace WSColissimo\WSPointRetraitService\Response\ValueObject;

use WSColissimo\WSPointRetraitService\Response\ValueObject\PickupPoint;

/**
 * RDVPickupPointResult
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class RDVPickupPointResult
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
     * @var array
     */
    protected $listePointRetraitAcheminement;

    /**
     * @var integer
     */
    protected $qualiteReponse;

    /**
     * @var string
     */
    protected $wsRequestId;

    /**
     * @var boolean
     */
    protected $rdv;

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
     * Getter for listePointRetraitAcheminement
     *
     * @return array
     */
    public function getPickupPointList()
    {
        return $this->listePointRetraitAcheminement;
    }

    /**
     * Setter for listePointRetraitAcheminement
     *
     * @param array $listePointRetraitAcheminement
     *
     * @return self
     */
    public function setPickupPointList($listePointRetraitAcheminement)
    {
        $this->listePointRetraitAcheminement = $listePointRetraitAcheminement;

        return $this;
    }

    /**
     * Getter for qualiteReponse
     *
     * @return integer
     */
    public function getResponseQuality()
    {
        return $this->qualiteReponse;
    }

    /**
     * Setter for qualiteReponse
     *
     * @param integer $qualiteReponse
     *
     * @return self
     */
    public function setResponseQuality($qualiteReponse)
    {
        $this->qualiteReponse = $qualiteReponse;

        return $this;
    }

    /**
     * Getter for wsRequestId
     *
     * @return string
     */
    public function getWsRequestId()
    {
        return $this->wsRequestId;
    }

    /**
     * Setter for wsRequestId
     *
     * @param string $wsRequestId
     *
     * @return self
     */
    public function setWsRequestId($wsRequestId)
    {
        $this->wsRequestId = $wsRequestId;

        return $this;
    }

    /**
     * Getter for rdv
     *
     * @return boolean
     */
    public function getRdv()
    {
        return $this->rdv;
    }

    /**
     * Setter for rdv
     *
     * @param boolean $rdv
     *
     * @return self
     */
    public function setRdv($rdv)
    {
        $this->rdv = $rdv;

        return $this;
    }
}
