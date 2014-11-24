<?php

namespace WSColissimo\WSPointRetraitService\Response;

use WSColissimo\WSPointRetraitService\Response\ValueObject\RDVPickupPointResult;

/**
 * RDVPickupPointResponse
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class RDVPickupPointResponse
{
    /**
     * @var RDVPickupPointResult
     */
    protected $RDVPickupPointResult;

    /**
     * @return RDVPickupPointResult
     */
    public function getRDVPickupPointResult()
    {
        return $this->RDVPickupPointResult;
    }

    /**
     * @param RDVPickupPointResult $RDVPickupPointResult
     */
    public function setRDVPickupPointResult(RDVPickupPointResult $RDVPickupPointResult)
    {
        $this->RDVPickupPointResult = $RDVPickupPointResult;
    }

    /**
     * Is response successful ?
     *
     * @return boolean
     */
    public function isSuccess()
    {
        if ($this->RDVPickupPointResult instanceof RDVPickupPointResult
                && $this->RDVPickupPointResult->getErrorCode() === 0) {
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
        if ($this->RDVPickupPointResult instanceof RDVPickupPointResult
                && $this->RDVPickupPointResult->getErrorCode() !== 0) {
            return $this->RDVPickupPointResult->getErrorMessage();
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
        if ($name === 'return') {
            return $this->setRDVPickupPointResult($value);
        }
    }

}
