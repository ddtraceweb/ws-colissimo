<?php

namespace WSColissimo\WSPointRetraitService;

use WSColissimo\WSPointRetraitService\Soap\SoapClientFactory;
use WSColissimo\Common\Client;

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
    public function build()
    {
        $soapClientFactory = new SoapClientFactory();
        $soapClient = $soapClientFactory->create($this->wsdl);

        return new Client($soapClient);
    }
}
