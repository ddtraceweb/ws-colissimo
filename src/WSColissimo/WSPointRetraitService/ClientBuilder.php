<?php

namespace WSColissimo\WSPointRetraitService;

use WSColissimo\Common\Model\Credentials;
use WSColissimo\WSPointRetraitService\Soap\SoapClientFactory;

/**
 * ClientBuilder for the WSPointRetraitService
 */
class ClientBuilder
{
    /**
     * Construct client builder with required parameters
     *
     * @param string $wsdl Path to the WSPointRetraitService WSDL
     */
    public function __construct($wsdl = 'https://ws.colissimo.fr/pointretrait-ws-cxf/PointRetraitServiceWS/2.0?wsdl')
    {
        $this->wsdl = $wsdl;
    }

    /**
     * Build the WSPointRetraitService SOAP client
     *
     * @return Client
     */
    public function build($accountNumber, $password)
    {
        $soapClientFactory = new SoapClientFactory();
        $soapClient = $soapClientFactory->create($this->wsdl);
        $credentials = new Credentials($accountNumber, $password);

        return new Client($soapClient, $credentials);
    }
}
