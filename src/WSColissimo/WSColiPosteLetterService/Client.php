<?php

namespace WSColissimo\WSColiPosteLetterService;

use WSColissimo\Common\Credentials;
use WSColissimo\WSColiPosteLetterService\Request\LetterColissimoRequest;

/**
 * A client for the WSColiPosteLetterService
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class Client implements ClientInterface
{
    /**
     * PHP SOAP client for interacting with the WSColiPosteLetterService API
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
     * @see \WSColissimo\WSColiPosteLetterService\ClientInterface::getLetterColissimo()
     */
    public function getLetterColissimo(LetterColissimoRequest $request)
    {
        if(empty($request->getLetter()->getContractNumber()) || empty($request->getLetter()->getPassword())) {

            $this->setCredentials($this->credentials);
        }

        return $this->soapClient->__soapCall('getLetterColissimo', array($request));
    }

    public function setCredentials($request)
    {
        $request->getLetter()->setContractNumber($this->credentials->getAccountNumber());
        $request->getLetter()->setPassword($this->credentials->getPassword());
    }
}
