<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * ServiceCallContext
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class ServiceCallContext
{
    /**
     * @var \DateTime
     */
    protected $dateDeposite;

    /**
     * @var string
     */
    protected $returnType;

    /**
     * @var string
     */
    protected $serviceType;

    /**
     * @var string
     */
    protected $commandNumber;

    /**
     * @var string
     */
    protected $motiveBack;

    /**
     * @var string
     */
    protected $logocobrande;

    /**
     * @var string
     */
    protected $languageConsignor;

    /**
     * Constructor
     *
     * @param string $commercialName
     */
    public function __construct()
    {
        $this->returnType           = Choice\RequestType::CREATE_PDF_FILE;
        $this->serviceType          = Choice\ServiceType::FRANCE;

        $this->dateDeposite         = new \DateTime();
        $this->languageConsignor    = 'FR';
    }

    /**
     * Get dateDeposite
     *
     * @return \DateTime
     */
    public function getDateDeposite()
    {
        return $this->dateDeposite;
    }

    /**
     * Set dateDeposite
     *
     * @param \DateTime|null $dateDeposite
     *
     * @return self
     */
    public function setDateDeposite(\DateTime $dateDeposite = null)
    {
        $this->dateDeposite = $dateDeposite;

        return $this;
    }

    /**
     * Get returnType
     *
     * @return string
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * Set returnType
     *
     * @param string $returnType
     *
     * @return self
     */
    public function setReturnType($returnType)
    {
        $this->returnType = $returnType;

        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Set serviceType
     *
     * @param strign $serviceType
     *
     * @return self
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Get commandNumber
     *
     * @return string
     */
    public function getCommandNumber()
    {
        return $this->commandNumber;
    }

    /**
     * Set commandNumber
     *
     * @param string $commandNumber
     */
    public function setCommandNumber($commandNumber)
    {
        $this->commandNumber = $commandNumber;

        return $this;
    }

    /**
     * Get motiveBack
     *
     * @return string
     */
    public function getMotiveBack()
    {
        return $this->motiveBack;
    }

    /**
     * Set motiveBack
     *
     * @param string $motiveBack
     *
     * @return self
     */
    public function setMotiveBack($motiveBack)
    {
        $this->motiveBack = $motiveBack;

        return $this;
    }

    /**
     * Get logocobrande
     *
     * @return string
     */
    public function getLogocobrande()
    {
        return $this->logocobrande;
    }

    /**
     * Set logocobrande
     *
     * @param string $logocobrande
     *
     * @return self
     */
    public function setLogocobrande($logocobrande)
    {
        $this->logocobrande = $logocobrande;

        return $this;
    }

    /**
     * Get languageConsignor
     *
     * @return string
     */
    public function getLanguageConsignor()
    {
        return $this->languageConsignor;
    }

    /**
     * Set languageConsignor
     *
     * @param string $languageConsignor
     *
     * @return self
     */
    public function setLanguageConsignor($languageConsignor)
    {
        $this->languageConsignor = $languageConsignor;

        return $this;
    }

    /**
     * Add validation rules
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('dateDeposite', new Assert\NotBlank());
        $metadata->addPropertyConstraint('dateDeposite', new Assert\DateTime());

        $metadata->addPropertyConstraint('returnType', new Assert\NotBlank());
        $metadata->addPropertyConstraint('returnType', new Assert\Choice(array(
            'callback' => array('\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Choice\RequestType', 'getChoices')
        )));

        $metadata->addPropertyConstraint('serviceType', new Assert\NotBlank());
        $metadata->addPropertyConstraint('serviceType', new Assert\Choice(array(
            'callback' => array('\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Choice\ServiceType', 'getChoices')
        )));

        $metadata->addPropertyConstraint('motiveBack', new Assert\Null());
        $metadata->addPropertyConstraint('logocobrande', new Assert\Null());

        $metadata->addPropertyConstraint('languageConsignor', new Assert\NotBlank());
    }

    /**
     * @param string $name
     *
     * @return boolean
     */
    public function __get($name)
    {
        if ($name === 'logo-co-brande') {
            return $this->logocobrande;
        }

        $method = 'get' . ucfirst($name);

        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }
}
