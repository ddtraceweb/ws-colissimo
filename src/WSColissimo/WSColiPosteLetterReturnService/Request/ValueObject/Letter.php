<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use WSColissimo\Common\Credentials;

/**
 * Letter
 */
class Letter
{
    /**
     * @var int
     */
    protected $contractNumber;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var ServiceCallContext
     */
    protected $service;

    /**
     * @var Parcel
     */
    protected $parcel;

    /**
     * @var DestEnv
     */
    protected $dest;

    /**
     * @var ExpEnv
     */
    protected $exp;

    /**
     * Get contract number
     *
     * @return int
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * Set contract number
     *
     * @param int $contractNumber
     *
     * @return self
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = (int) $contractNumber;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set credentials in one go
     *
     * @param Credentials $credentials
     *
     * @return self
     */
    public function setCredentials(Credentials $credentials)
    {
        $this->contractNumber   = $credentials->getAccountNumber();
        $this->password         = $credentials->getPassword();

        return $this;
    }

    /**
     * Get service
     *
     * @return ServiceCallContext
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set service
     *
     * @param ServiceCallContext $service
     *
     * @return self
     */
    public function setService(ServiceCallContext $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get parcel
     *
     * @return Parcel
     */
    public function getParcel()
    {
        return $this->parcel;
    }

    /**
     * Set parcel
     *
     * @param Parcel $parcel
     *
     * @return self
     */
    public function setParcel(Parcel $parcel)
    {
        $this->parcel = $parcel;

        return $this;
    }

    /**
     * Get dest
     *
     * @return DestEnv
     */
    public function getDest()
    {
        return $this->dest;
    }

    /**
     * Set dest
     *
     * @param DestEnv $dest
     *
     * @return self
     */
    public function setDest(DestEnv $dest)
    {
        $this->dest = $dest;

        return $this;
    }

    /**
     * Get exp
     *
     * @return ExpEnv
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set exp
     *
     * @param ExpEnv $exp
     *
     * @return self
     */
    public function setExp(ExpEnv $exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Add validation rules
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('contractNumber', new Assert\NotBlank());
        $metadata->addPropertyConstraint('contractNumber', new Assert\Type(array('type' => 'integer')));
        $metadata->addPropertyConstraint('contractNumber', new Assert\Regex(array('pattern' => '/^[0-9]{6}$/')));

        $metadata->addPropertyConstraint('password', new Assert\NotBlank());
        $metadata->addPropertyConstraint('password', new Assert\Type(array('type' => 'string')));

        $metadata->addPropertyConstraint('service', new Assert\NotBlank());
        $metadata->addPropertyConstraint('service', new Assert\Valid());

        $metadata->addPropertyConstraint('parcel', new Assert\NotBlank());
        $metadata->addPropertyConstraint('parcel', new Assert\Valid());

        $metadata->addPropertyConstraint('dest', new Assert\NotBlank());
        $metadata->addPropertyConstraint('dest', new Assert\Valid());

        $metadata->addPropertyConstraint('exp', new Assert\NotBlank());
        $metadata->addPropertyConstraint('exp', new Assert\Valid());
    }

    /**
     * Getter to prevent break on get inexistant variables
     *
     * @param string $name
     *
     * @return mixed|void
     */
    public function __get($name)
    {
        $method = 'get' . ucfirst($name);

        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }
}
