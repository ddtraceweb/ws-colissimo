<?php

namespace WSColissimo\Common;

use WSColissimo\Common\Request\RequestInterface;

/**
 * A client for the WSColiPosteLetterService and WSPointRetraitService
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class Client implements ClientInterface
{
    /**
     * PHP SOAP client for interacting with the API
     *
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * Construct SO Flexibilite SOAP client
     *
     * @param \SoapClient $soapClient
     */
    public function __construct(\SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    /**
     * (non-PHPdoc)
     * @see \WSColissimo\Common\ClientInterface::sendRequest()
     */
    public function sendRequest(RequestInterface $request)
    {
        return $this->soapClient->__soapCall($request->getMethod(), array($request->getContent()));
    }
}
