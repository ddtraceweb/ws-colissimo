<?php

namespace WSColissimo\WSColiPosteLetterService\Util;

/**
 * ServiceAvailability Checker
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class ServiceAvailability extends WSColissimo\WSColiPosteLetterService\Util\ServiceAvailability;
{
    /**
     * Constructor
     *
     * @param string $endPoint
     */
    public function __construct($endPoint = 'http://ws.colissimo.fr/supervision-wspudo/supervision.jsp')
    {
        parent::__construct($endPoint);
    }
}
