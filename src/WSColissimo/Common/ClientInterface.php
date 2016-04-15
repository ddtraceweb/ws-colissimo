<?php

namespace WSColissimo\Common;

use WSColissimo\Common\Request\RequestInterface;
use WSColissimo\WSColiPosteLetterService\Response\LetterColissimoResponse;
use WSColissimo\WSPointRetraitService\Request\RDVPickupPointResponse;
use WSColissimo\WSPointRetraitService\Request\PickupPointByIDResponse;

/**
 * ClientInterface for the WSColiPosteLetterService and WSPointRetraitService
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
interface ClientInterface
{
    /**
     * Send request
     *
     * @param RequestInterface $request
     *
     * @return LetterColissimoResponse|RDVPickupPointResponse|PickupPointByIDResponse
     */
    public function sendRequest(RequestInterface $request);
}
