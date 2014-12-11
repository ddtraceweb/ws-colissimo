<?php

namespace WSColissimo\Common;

use Symfony\Component\Validator\ValidatorInterface;
use WSColissimo\Common\Exception\InvalidRequestException;
use WSColissimo\Common\Exception\RequestException;
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
     * @var ValidatorInterface
     */
    protected $validator;

    /**
     * Construct SO Flexibilite SOAP client
     *
     * @param \SoapClient $soapClient
     */
    public function __construct(\SoapClient $soapClient, ValidatorInterface $validator)
    {
        $this->soapClient = $soapClient;
        $this->validator = $validator;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(RequestInterface $request)
    {
        return $this->validator->validate($request);
    }

    protected function createRequestExceptionFromSoapFault(\SoapFault $soapFault)
    {
        return new RequestException($soapFault->getMessage(), $soapFault->getCode());
    }

    /**
     * (non-PHPdoc)
     * @see \WSColissimo\Common\ClientInterface::sendRequest()
     */
    public function sendRequest(RequestInterface $request)
    {
        $violations = $this->validate($request);
        if ($violations->count() > 0) {
            throw new InvalidRequestException($violations);
        }

        try {
            return $this->soapClient->__soapCall($request->getMethod(), array($request->getContent()));
        } catch(\SoapFault $exception) {
            throw $this->createRequestExceptionFromSoapFault($exception);
        }
    }
}
