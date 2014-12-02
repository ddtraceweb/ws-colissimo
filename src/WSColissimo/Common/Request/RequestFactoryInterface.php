<?php

namespace WSColissimo\Common\Request;

use WSColissimo\WSColiPosteLetterService\Request\LetterColissimoRequest;
use WSColissimo\WSPointRetraitService\Request\PickupPointByIDRequest;
use WSColissimo\WSPointRetraitService\Request\RDVPickupPointRequest;

/**
 * Interface for Request factory
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
interface RequestFactoryInterface
{
    /**
     * Create Letter Colissimo request
     *
     * @return LetterColissimoRequest
     */
    public function createLetterColissimoRequest(Letter $letter = null);

    /**
     * Create RDVPickupPoint request
     *
     * @return RDVPickupPointRequest
     */
    public function createRDVPickupPointRequest();

    /**
     * Create a PickupPointByID request
     *
     * @return PickupPointByIDRequest
     */
    public function createPickupPointByIDRequest();
}
