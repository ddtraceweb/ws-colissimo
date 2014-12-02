<?php

namespace WSColissimo\Common\Request;

use WSColissimo\Common\Credentials;
use WSColissimo\Common\Request\RequestFactoryInterface;
use WSColissimo\WSColiPosteLetterService\Request\LetterColissimoRequest;
use WSColissimo\WSPointRetraitService\Request\RDVPickupPointRequest;


/**
 * Factory for SoColissimo Requests
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class RequestFactory implements RequestFactoryInterface
{
    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @param string $accountNumber
     */
    public function __construct($accountNumber, $password)
    {
        $this->credentials = new Credentials($accountNumber, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function createLetterColissimoRequest(Letter $letter = null)
    {
        $request = new LetterColissimoRequest($letter);
        $request->setCredentials($this->credentials);

        return $request;
    }

    /**
     * {@inheritdoc}
     */
    public function createRDVPickupPointRequest()
    {
        $request = new RDVPickupPointRequest();
        $request->setCredentials($this->credentials);

        return $request;
    }

    /**
     * {@inheritdoc}
     */
    public function createPickupPointByIDRequest()
    {
        $request = new PickupPointByIDRequest();
        $request->setCredentials($this->credentials);

        return $request;
    }
}
