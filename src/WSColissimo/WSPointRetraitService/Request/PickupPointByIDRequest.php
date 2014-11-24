<?php

namespace WSColissimo\WSPointRetraitService\Request;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * PickupPointByIdRequest
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class PickupPointByIDRequest
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
    protected $id;

    /**
     * @var string
     */
    protected $reseau;

    /**
     * @var integer
     */
    protected $weight;

    /**
     * @var string
     */
    protected $date;

    /**
     * @var integer
     */
    protected $filterRelay;

    /**
     * @var string
     */
    protected $langue;

    /**
     * Constructor
     * @param string  $accountNumber
     * @param string  $password
     * @param string  $id
     * @param string  $reseau
     * @param integer  $weight
     * @param \DateTime  $date
     * @param integer $filterRelay
     * @param string  $langue
     */
    public function __construct($accountNumber = null, $password = null, $id = null, $reseau = null, $weight = null, \DateTime $date = null, $filterRelay = 1, $langue = 'FR')
    {
        $this->accountNumber = $accountNumber;
        $this->password = $password;
        $this->id = $id;
        $this->reseau = $reseau;
        $this->weight = $weight;
        $this->date = (($date !== null)? $date->format('d/m/Y'): null);
        $this->filterRelay = $filterRelay;
        $this->langue = $langue;
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
     * Getter for id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Setter for id
     *
     * @param  string $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Getter for reseau
     *
     * @return string
     */
    public function getReseau()
    {
        return $this->reseau;
    }

    /**
     * Setter for reseau
     *
     * @param string $reseau
     *
     * @return self
     */
    public function setReseau($reseau)
    {
        $this->reseau = $reseau;

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
     * Getter for date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return new \DateTime($this->date);
    }

    /**
     * Setter for date
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date->format('d/m/Y');

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
     * Getter for langue
     *
     * @return string
     */
    public function getLang()
    {
        return $this->langue;
    }

    /**
     * Setter for langue
     *
     * @param string $langue
     *
     * @return self
     */
    public function setLang($langue)
    {
        $this->langue = $langue;

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
        // $metadata->addPropertyConstraint('accountNumber', new Assert\Type(array('type' => 'integer')));
        $metadata->addPropertyConstraint('accountNumber', new Assert\Regex(array('pattern' => '/^[0-9]{6}$/')));

        $metadata->addPropertyConstraint('password', new Assert\NotBlank());
        $metadata->addPropertyConstraint('password', new Assert\Type(array('type' => 'string')));

        $metadata->addPropertyConstraint('id', new Assert\NotBlank());
        $metadata->addPropertyConstraint('id', new Assert\Regex(array('pattern' => '/^[0-9]{6}$/')));

        $metadata->addPropertyConstraint('reseau', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('reseau', new Assert\Length(array('min' => 3, 'max' => 3)));

        $metadata->addPropertyConstraint('weight', new Assert\Type(array('type' => 'integer')));
        $metadata->addPropertyConstraint('weight', new Assert\Range(array('min' => 1, 'max' => 30000)));

        $metadata->addPropertyConstraint('date', new Assert\NotBlank());
        // $metadata->addPropertyConstraint('date', new Assert\DateTime());
        $metadata->addPropertyConstraint('date', new Assert\Regex(array('pattern' => '/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/')));

        $metadata->addPropertyConstraint('filterRelay', new Assert\Type(array('type' => 'integer')));
        $metadata->addPropertyConstraint('filterRelay', new Assert\Range(array('min' => 0, 'max' => 1)));

        $metadata->addPropertyConstraint('langue', new Assert\Type(array('type' => 'string')));
        $metadata->addPropertyConstraint('langue', new Assert\Length(array('min' => 2, 'max' => 2)));
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
