<?php

namespace WSColissimo\WSPointRetraitService;

use WSColissimo\Common\Credentials;
use WSColissimo\WSPointRetraitService\Request\PickupPointByIDRequest;
use WSColissimo\WSPointRetraitService\Request\RDVPickupPointRequest;

/**
 * A client for the WSPointRetraitService
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class Client implements ClientInterface
{
    /**
     * PHP SOAP client for interacting with the WSPointRetraitService API
     *
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * Account number and password container
     * @var Credentials
     */
    protected $credentials;

    /**
     * Construct SO Flexibilite SOAP client
     *
     * @param \SoapClient $soapClient
     */
    public function __construct(\SoapClient $soapClient, Credentials $credentials)
    {
        $this->soapClient = $soapClient;
        $this->credentials = $credentials;
    }

    /**
     * (non-PHPdoc)
     * @see \WSColissimo\WSPointRetraitService\ClientInterface::findRDVPointRetraitAcheminement()
     */
    public function findRDVPointRetraitAcheminement(RDVPickupPointRequest $request)
    {
        if(empty($request->getAccountNumber()) || empty($request->getPassword())) {
            $this->setCredentials($request);
        }

        return $this->soapClient->__soapCall('findRDVPointRetraitAcheminement', array($request));
    }

    /**
     * (non-PHPdoc)
     * @see \WSColissimo\WSPointRetraitService\ClientInterface::findPointRetraitAcheminementByID()
     */
    public function findPointRetraitAcheminementByID(PickupPointByIDRequest $request)
    {
        if(empty($request->getAccountNumber()) || empty($request->getPassword())) {
            $this->setCredentials($request);
        }

        return $this->soapClient->__soapCall('findPointRetraitAcheminementByID', array($request));
    }

    public function setCredentials($request) {
        $request->setAccountNumber($this->credentials->getAccountNumber());
        $request->setPassword($this->credentials->getPassword());
    }
}
