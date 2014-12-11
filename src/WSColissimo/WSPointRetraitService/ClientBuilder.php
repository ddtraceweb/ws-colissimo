<?php

namespace WSColissimo\WSPointRetraitService;

use Symfony\Component\Validator\Validation;
use WSColissimo\Common\Client;
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
    public function build()
    {
        $soapClientFactory = new SoapClientFactory();
        $soapClient = $soapClientFactory->create($this->wsdl);
        $validator = $this->createValidator();

        return new Client($soapClient, $validator);
    }

    /**
     * Create validator
     *
     * @return Symfony\Component\Validator\ValidatorInterface
     */
    protected function createValidator()
    {
        return Validation::createValidatorBuilder()
            ->addMethodMapping('loadValidatorMetadata')
            ->getValidator();
    }
}
