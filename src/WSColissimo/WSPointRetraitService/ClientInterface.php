<?php

namespace WSColissimo\WSPointRetraitService;

use WSColissimo\WSPointRetraitService\Request\RDVPickupPointRequest;
use WSColissimo\WSPointRetraitService\Request\PickupPointByIDRequest;
use WSColissimo\WSPointRetraitService\Request\RDVPickupPointResponse;
use WSColissimo\WSPointRetraitService\Request\PickupPointByIDResponse;

/**
 * ClientInterface for the WSPointRetraitService
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
interface ClientInterface
{
    /**
     * Ask for the available pickup points and rendezvous disponibility
     *
     * @param RDVPickupPointRequest $request
     *
     * @return RDVPickupPointResponse
     */
    public function findRDVPointRetraitAcheminement(RDVPickupPointRequest $request);

    /**
     * Ask for a pickup point from its id
     *
     * @param PickupPointByIDRequest $request
     *
     * @return PickupPointByIDResponse
     */
    public function findPointRetraitAcheminementByID(PickupPointByIDRequest $request);
}
