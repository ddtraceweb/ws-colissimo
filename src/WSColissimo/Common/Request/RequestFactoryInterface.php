<?php

namespace WSColissimo\Common\Request;

use Meup\UserBundle\Entity\User;
use WSColissimo\WSColiPosteLetterService\Request\LetterColissimoRequest;
use WSColissimo\WSColiPosteLetterService\Request\ValueObject\Letter;
use WSColissimo\WSPointRetraitService\Request\PickupPointByIDRequest;
use WSColissimo\WSPointRetraitService\Request\RDVPickupPointRequest;

/**
 * Interface for Request factory
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
interface RequestFactoryInterface
{
    /**
     * Create Letter Colissimo request
     *
     * @return LetterColissimoRequest
     */
    public function createLetterColissimoRequest(Letter $letter = null);

    /**
     * Create RDVPickupPoint request
     *
     * @param User $user
     * @return RDVPickupPointRequest
     */
    public function createRDVPickupPointRequest(User $user);

    /**
     * Create a PickupPointByID request
     *
     * @param string $id
     * @param string $network
     * @return PickupPointByIDRequest
     */
    public function createPickupPointByIDRequest($id, $network);
}
