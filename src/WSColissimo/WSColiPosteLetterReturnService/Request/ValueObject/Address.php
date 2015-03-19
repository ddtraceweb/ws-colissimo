<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * Address
 */
class Address
{
    /**
     * @var string
     */
    protected $line0;

    /**
     * @var string
     */
    protected $line1;

    /**
     * @var string
     */
    protected $line2;

    /**
     * @var string
     */
    protected $line3;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->countryCode = 'FR';
        $this->country     = 'France';
    }

    /**
     * Get line0
     *
     * @return string
     */
    public function getLine0()
    {
        return $this->line0;
    }

    /**
     * Set line0
     *
     * @param string $line0
     *
     * @return self
     */
    public function setLine0($line0)
    {
        $this->line0 = $line0;

        return $this;
    }

    /**
     * Get line1
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * Set line1
     *
     * @param string $line1
     *
     * @return self
     */
    public function setLine1($line1)
    {
        $this->line1 = $line1;

        return $this;
    }

    /**
     * Get line2
     *
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * Set line2
     *
     * @param string $line2
     *
     * @return self
     */
    public function setLine2($line2)
    {
        $this->line2 = $line2;

        return $this;
    }

    /**
     * Get line3
     *
     * @return string
     */
    public function getLine3()
    {
        return $this->line3;
    }

    /**
     * Set line3
     *
     * @param string $line3
     *
     * @return self
     */
    public function setLine3($line3)
    {
        $this->line3 = $line3;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Add validation rules
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('email', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('email', new Assert\Email());

        $metadata->addPropertyConstraint('line0', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('line0', new Assert\NotBlank());
        $metadata->addPropertyConstraint('line0', new Assert\Length(array('max' => 35)));

        $metadata->addPropertyConstraint('line1', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('line1', new Assert\Length(array('max' => 35)));

        $metadata->addPropertyConstraint('line2', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('line2', new Assert\Length(array('max' => 35)));

        $metadata->addPropertyConstraint('line3', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('line3', new Assert\Length(array('max' => 35)));

        $metadata->addPropertyConstraint('countryCode', new Assert\NotBlank());
        $metadata->addPropertyConstraint('countryCode', new Assert\Regex(array('pattern' => '/^[A-Z]{2}$/')));

        $metadata->addPropertyConstraint('city', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('city', new Assert\NotBlank());
        $metadata->addPropertyConstraint('city', new Assert\Length(array('max' => 35)));

        $metadata->addPropertyConstraint('postalCode', new Assert\NotBlank());
        $metadata->addPropertyConstraint('postalCode', new Assert\Regex(array('pattern' => '/^[a-zA-Z0-9]{5}$/')));
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
