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
     * @return \DateTime
     */
    public function getDateDeposite()
    {
        return $this->dateDeposite;
    }

    /**
     * @param \DateTime $dateDeposite
     */
    public function setDateDeposite(\DateTime $dateDeposite = null)
    {
        $this->dateDeposite = $dateDeposite;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnType()
    {
        return $this->returnType;
    }

    /**
     * @param string $returnType
     */
    public function setReturnType($returnType)
    {
        $this->returnType = $returnType;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param string $serviceType
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommandNumber()
    {
        return $this->commandNumber;
    }

    /**
     * @param string $commandNumber
     */
    public function setCommandNumber($commandNumber)
    {
        $this->commandNumber = $commandNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getMotiveBack()
    {
        return $this->motiveBack;
    }

    /**
     * @param string $motiveBack
     */
    public function setMotiveBack($motiveBack)
    {
        $this->motiveBack = $motiveBack;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogocobrande()
    {
        return $this->logocobrande;
    }

    /**
     * @param string $logocobrande
     */
    public function setLogocobrande($logocobrande)
    {
        $this->logocobrande = $logocobrande;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageConsignor()
    {
        return $this->languageConsignor;
    }

    /**
     * @param string $languageConsignor
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
