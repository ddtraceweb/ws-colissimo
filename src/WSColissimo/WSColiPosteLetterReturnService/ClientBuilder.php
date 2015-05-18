<?php

namespace WSColissimo\WSColiPosteLetterReturnService;

use Symfony\Component\Validator\Validation;
use WSColissimo\Common\Client;
use WSColissimo\WSColiPosteLetterReturnService\Soap\SoapClientFactory;

/**
 * ClientBuilder for the WSColiPosteLetterReturnService
 */
class ClientBuilder
{
    /**
     * Construct client builder with required parameters
     *
     * @param string $wsdl Path to the WSColiPosteLetterReturnService WSDL
     */
    public function __construct($wsdl = 'https://ws.colissimo.fr/soap.shippingclp-return-ws-proxy/services/WSColiPosteLetterReturnService?wsdl')
    {
        $this->wsdl = $wsdl;
    }

    /**
     * Build the WSColiPosteLetterReturnService SOAP client
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
