<?php

namespace WSColissimo\Common\Request;

use Meup\UserBundle\Entity\User;
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
    public function createRDVPickupPointRequest(User $user)
    {
        $address = $user->getAddress();
        $countryIso = $address->getCity()->getCountry()->getIsoCode();

        $request = new RDVPickupPointRequest();
        $request->setCredentials($this->credentials);
        $request->setAddress($address->getLine2());
        $request->setZipCode($address->getPostalCode());
        $request->setCity($address->getCity()->getName());
        $request->setCountryCode($countryIso);
        $request->setShippingDate(new \DateTime());
        $request->setOptionInter((in_array($countryIso, array('FR', 'MC'))? 0: 2);

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
