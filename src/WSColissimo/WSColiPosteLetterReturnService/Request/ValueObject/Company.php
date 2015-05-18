<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class Company
{
    /**
     * @var string
     */
    protected $companyName;

    /**
     * @var string
     */
    protected $Surname;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var string
     */
    protected $serviceInfo;

    /**
     * Getter for companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Setter for companyName
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Getter for surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Setter for surname
     *
     * @param string $Surname
     *
     * @return self
     */
    public function setSurname($Surname)
    {
        $this->surname = $Surname;

        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $Name
     *
     * @return self
     */
    public function setName($Name)
    {
        $this->name = $Name;

        return $this;
    }

    /**
     * Getter for serviceInfo
     *
     * @return string
     */
    public function getServiceInfo()
    {
        return $this->serviceInfo;
    }

    /**
     * Setter for serviceInfo
     *
     * @param string $serviceInfo
     *
     * @return self
     */
    public function setServiceInfo($serviceInfo)
    {
        $this->serviceInfo = $serviceInfo;

        return $this;
    }

    /**
     * Add validation rules
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('companyName', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('companyName', new Assert\NotBlank());

        $metadata->addPropertyConstraint('name', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('name', new Assert\Length(array('max' => 35)));

        $metadata->addPropertyConstraint('surname', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('surname', new Assert\Length(array('max' => 35)));

        $metadata->addPropertyConstraint('serviceInfo', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('serviceInfo', new Assert\Length(array('max' => 35)));
    }
}
