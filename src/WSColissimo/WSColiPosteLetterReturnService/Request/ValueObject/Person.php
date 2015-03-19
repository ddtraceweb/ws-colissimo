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
    protected $surname;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $civility;

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
     * @param string $surname
     *
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

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
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Getter for civility
     *
     * @return string
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Setter for civility
     *
     * @param string $civility
     *
     * @return self
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;

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
        $metadata->addPropertyConstraint('companyName', new Assert\Length(array('max' => 35)));

        $metadata->addPropertyConstraint('name', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('name', new Assert\Length(array('max' => 35)));

        $metadata->addPropertyConstraint('surname', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('surname', new Assert\Length(array('max' => 35)));

        $metadata->addPropertyConstraint('civility', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('civility', new Assert\Length(array('max' => 35)));
    }
}
