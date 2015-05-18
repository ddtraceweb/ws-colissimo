<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * DestEnv
 */
class DestEnv
{
    /**
     * @var string
     */
    protected $ref;

    /**
     * @var Address
     */
    protected $address;

    /**
     * @var boolean
     */
    protected $codeBarForreference;

    /**
     * @var Company
     */
    protected $entity;
    /**
     * Constructor
     *
     * @param Address $address
     */
    public function __construct(Company $entity, Address $address = null)
    {
        $this->address              = $address;
        $this->entity               = $entity;
        $this->codeBarForreference  = false;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return self
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
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
     * Get codeBarForreference
     *
     * @return boolean
     */
    public function getCodeBarForreference()
    {
        return $this->codeBarForreference;
    }

    /**
     * Set codeBarForreference
     *
     * @param boolean $codeBarForreference
     *
     * @return self
     */
    public function setCodeBarForreference($codeBarForreference)
    {
        $this->codeBarForreference = $codeBarForreference;

        return $this;
    }

    /**
     * Getter for entity
     *
     * @return Company
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Setter for entity
     *
     * @param Company $entity
     *
     * @return self
     */
    public function setEntity(Company $entity)
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
        $metadata->addPropertyConstraint('ref', new Assert\Length(array('max' => 15)));

        $metadata->addPropertyConstraint('address', new Assert\NotBlank());
        $metadata->addPropertyConstraint('address', new Assert\Valid());

        $metadata->addPropertyConstraint('entity', new Assert\NotBlank());
        $metadata->addPropertyConstraint('entity', new Assert\Valid());

        $metadata->addPropertyConstraint('codeBarForreference', new Assert\Type(array('type' => 'boolean')));
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
