<?php

namespace WSColissimo\WSColiPosteLetterService;

use Symfony\Component\Validator\Validation;
use WSColissimo\Common\Client;
use WSColissimo\WSColiPosteLetterService\Soap\SoapClientFactory;

/**
 * ClientBuilder for the WSColiPosteLetterService
 */
class ClientBuilder
{
    /**
     * Construct client builder with required parameters
     *
     * @param string $wsdl Path to the WSColiPosteLetterService WSDL
     */
    public function __construct($wsdl = 'https://ws.colissimo.fr/soap.shippingclpV2/services/WSColiPosteLetterService?wsdl')
    {
        $this->wsdl = $wsdl;
    }

    /**
     * Build the WSColiPosteLetterService SOAP client
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
