<?php

namespace WSColissimo\WSPointRetraitService\Response;

use WSColissimo\WSPointRetraitService\Response\ValueObject\PickupPointByIDResult;

/**
 * PickupPointByIDResponse
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class PickupPointByIDResponse
{
    /**
     * @var PickupPointByIDResult
     */
    protected $pickupPointByIDResult;

    /**
     * @return PickupPointByIDResult
     */
    public function getPickupPointByIDResult()
    {
        return $this->pickupPointByIDResult;
    }

    /**
     * @param PickupPointByIDResult $pickupPointByIDResult
     */
    public function setPickupPointByIDResult(PickupPointByIDResult $pickupPointByIDResult)
    {
        $this->pickupPointByIDResult = $pickupPointByIDResult;
    }

    /**
     * Is response successful ?
     *
     * @return boolean
     */
    public function isSuccess()
    {
        if ($this->pickupPointByIDResult instanceof PickupPointByIDResult
                && $this->pickupPointByIDResult->getErrorCode() === 0) {
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
        if ($this->pickupPointByIDResult instanceof PickupPointByIDResult
                && $this->pickupPointByIDResult->getErrorCode() !== 0) {
            return $this->pickupPointByIDResult->getErrorMessage();
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
            return $this->setPickupPointByIDResult($value);
        }
    }

}
