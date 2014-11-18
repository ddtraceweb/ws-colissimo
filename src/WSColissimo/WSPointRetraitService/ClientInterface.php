<?php

namespace WSColissimo\WSPointRetraitService;

use WSColissimo\WSPointRetraitService\Request\RDVPointRetraitAcheminementRequest;
use WSColissimo\WSPointRetraitService\Request\PointRetraitAcheminementByIDRequest;
use WSColissimo\WSPointRetraitService\Request\RDVPointRetraitAcheminementResponse;
use WSColissimo\WSPointRetraitService\Request\PointRetraitAcheminementByIDResponse;

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
     * @param RDVPointRetraitAcheminementRequest $request
     *
     * @return RDVPointRetraitAcheminementResponse
     */
    public function findRDVPointRetraitAcheminement(RDVPointRetraitAcheminementRequest $request);

    /**
     * Ask for a pickup point from its id
     *
     * @param PointRetraitAcheminementByIDRequest $request
     *
     * @return PointRetraitAcheminementByIDResponse
     */
    public function findPointRetraitAcheminementByID(PointRetraitAcheminementByIDRequest $request);
}
