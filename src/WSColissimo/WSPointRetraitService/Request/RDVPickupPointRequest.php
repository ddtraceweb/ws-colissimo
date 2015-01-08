<?php

namespace WSColissimo\WSPointRetraitService\Request;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use WSColissimo\Common\Credentials;
use WSColissimo\Common\Request\RequestInterface;

/**
 * RDVPickupPointRequest
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class RDVPickupPointRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $accountNumber;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $zipCode;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var integer
     */
    protected $weight;

    /**
     * @var string : ws doesn't use dateTime on request...
     */
    protected $shippingDate;

    /**
     * @var integer
     */
    protected $filterRelay;

    /**
     * @var string
     */
    protected $requestId;

    /**
     * @var string
     */
    protected $lang;

    /**
     * @var integer
     */
    protected $optionInter;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->filterRelay = 1;
        $this->lang = 'FR';
        $this->optionInter = 0;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
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
     * Getter for address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Setter for address
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Getter for zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Setter for zipCode
     *
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Getter for city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Setter for city
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
     * Getter for countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Setter for countryCode
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
     * Getter for weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Setter for weight
     *
     * @param integer $weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Getter for shippingDate
     *
     * @return \DateTime
     */
    public function getShippingDateAsDateTime()
    {
        return new \DateTime($this->shippingDate);
    }

    /**
     * Getter for shippingDate
     *
     * @return string
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    /**
     * Setter for shippingDate
     *
     * @param \DateTime $shippingDate
     *
     * @return self
     */
    public function setShippingDate(\DateTime $shippingDate)
    {
        $this->shippingDate = $shippingDate->format('d/m/Y');

        return $this;
    }

    /**
     * Getter for filterRelay
     *
     * @return integer
     */
    public function getFilterRelay()
    {
        return $this->filterRelay;
    }

    /**
     * Setter for filterRelay
     *
     * @param integer $filterRelay
     *
     * @return self
     */
    public function setFilterRelay($filterRelay)
    {
        $this->filterRelay = $filterRelay;

        return $this;
    }

    /**
     * Getter for requestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Setter for requestId
     *
     * @param string $requestId
     *
     * @return self
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;

        return $this;
    }

    /**
     * Getter for lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Setter for lang
     *
     * @param string $lang
     *
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Getter for optionInter
     *
     * @return integer
     */
    public function getOptionInter()
    {
        return $this->optionInter;
    }

    /**
     * Setter for optionInter
     *
     * @param integer $optionInter
     *
     * @return self
     */
    public function setOptionInter($optionInter)
    {
        $this->optionInter = $optionInter;

        return $this;
    }

    /**
     * Add validation rules
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('accountNumber', new Assert\NotBlank());
        $metadata->addPropertyConstraint('accountNumber', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('accountNumber', new Assert\Regex(array('pattern' => '/^[0-9]{6}$/')));

        $metadata->addPropertyConstraint('password', new Assert\NotBlank());
        $metadata->addPropertyConstraint('password', new Assert\Type(array('type' => 'string')));

        $metadata->addPropertyConstraint('address', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('address', new Assert\Length(array('max' => 200)));

        $metadata->addPropertyConstraint('zipCode', new Assert\NotBlank());
        $metadata->addPropertyConstraint('zipCode', new Assert\Regex(array('pattern' => '/^[a-zA-Z0-9]+$/')));

        $metadata->addPropertyConstraint('city', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('city', new Assert\NotBlank());
        $metadata->addPropertyConstraint('city', new Assert\Length(array('max' => 50)));

        $metadata->addPropertyConstraint('countryCode', new Assert\NotBlank());
        $metadata->addPropertyConstraint('countryCode', new Assert\Regex(array('pattern' => '/^[A-Z]{2}$/')));

        $metadata->addPropertyConstraint('weight', new Assert\Type(array('type' => 'integer')));
        $metadata->addPropertyConstraint('weight', new Assert\Range(array('min' => 1, 'max' => 30000)));

        $metadata->addPropertyConstraint('shippingDate', new Assert\NotBlank());
        $metadata->addPropertyConstraint('shippingDate', new Assert\Regex(array('pattern' => '/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/')));

        $metadata->addPropertyConstraint('filterRelay', new Assert\Type(array('type' => 'integer')));
        $metadata->addPropertyConstraint('filterRelay', new Assert\Range(array('min' => 0, 'max' => 1)));

        $metadata->addPropertyConstraint('requestId', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('requestId', new Assert\Length(array('max' => 64)));

        $metadata->addPropertyConstraint('lang', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('lang', new Assert\Length(array('min' => 2, 'max' => 2)));

        $metadata->addPropertyConstraint('optionInter', new Assert\Type(array('type' => 'integer')));
        $metadata->addPropertyConstraint('optionInter', new Assert\Range(array('min' => 0, 'max' => 2)));
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

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return array(
            'accountNumber' => $this->getAccountNumber(),
            'password'      => $this->getPassword(),
            'address'       => $this->getAddress(),
            'zipCode'       => $this->getZipCode(),
            'city'          => $this->getCity(),
            'countryCode'   => $this->getCountryCode(),
            'weight'        => $this->getWeight(),
            'shippingDate'  => $this->getShippingDate(),
            'filterRelay'   => $this->getFilterRelay(),
            'requestId'     => $this->getRequestId(),
            'lang'          => $this->getLang(),
            'optionInter'   => $this->getOptionInter(),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'findRDVPointRetraitAcheminement';
    }

    /**
     * {@inheritdoc}
     */
    public function setCredentials(Credentials $credentials)
    {
        $this->credentials = $credentials;
        $this->setAccountNumber($credentials->getAccountNumber());
        $this->setPassword($credentials->getPassword());
    }
}
