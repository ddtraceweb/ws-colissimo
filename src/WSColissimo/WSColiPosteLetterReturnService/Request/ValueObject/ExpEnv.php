<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * ExpEnv
 */
class ExpEnv
{
    /**
     * @var Address
     */
    protected $address;

    /**
     * @var Person
     */
    protected $entity;

    /**
     * Constructor
     *
     * @param Address $address
     */
    public function __construct(Person $entity, Address $address = null)
    {
        $this->address  = $address;
        $this->entity   = $entity;
    }

    /**
     * Get address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address
     *
     * @param Address $address
     *
     * @return self
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Getter for entity
     *
     * @return Person
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Setter for entity
     *
     * @param Person $entity
     *
     * @return self
     */
    public function setEntity(Person $entity)
    {
        $this->entity = $entity;

        return $this;
    }


    /**
     * Add validation rules
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('address', new Assert\NotBlank());
        $metadata->addPropertyConstraint('address', new Assert\Valid());

        $metadata->addPropertyConstraint('entity', new Assert\NotBlank());
        $metadata->addPropertyConstraint('entity', new Assert\Valid());
    }

    /**
     * Getter
     *
     * @param string $name
     */
    public function __get($name)
    {
        $method = 'get' . ucfirst($name);

        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }
}
