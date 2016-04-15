<?php

namespace WSColissimo\WSColiPosteLetterService\Request\ValueObject;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * Parcel
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class Parcel
{
    /**
     * @var string
     */
    public $insuranceRange;

    /**
     * @var integer
     */
    public $typeGamme;

    /**
     * @var integer
     */
    public $parcelNumber;

    /**
     * @var string
     */
    public $returnTypeChoice;

    /**
     * @var integer
     */
    public $insuranceAmount;

    /**
     * @var integer
     */
    public $insuranceValue;

    /**
     * @var string
     */
    public $recommendationLevel;

    /**
     * @var integer
     */
    public $recommendationAmount;

    /**
     * @var float
     */
    public $weight;

    /**
     * @var boolean
     */
    public $horsGabarit;

    /**
     * @var integer
     */
    public $horsGabaritAmount;

    /**
     * @var string
     */
    public $deliveryMode;

    /**
     * @var boolean
     */
    public $returnReceipt;

    /**
     * @var boolean
     */
    public $recommendation;

    /**
     * @var string
     */
    public $instructions;

    /**
     * @var integer
     */
    public $regateCode;

    /**
     * @var array
     */
    public $contents;

    /**
     * Constructor
     *
     * @param float $weight
     */
    public function __construct($weight = null)
    {
        $this->weight         = $weight;

        $this->horsGabarit    = false;
        $this->deliveryMode   = Choice\DeliveryMode::DOM;
        $this->returnReceipt  = false;
        $this->recommendation = false;
    }

    /**
     * @return string
     */
    public function getInsuranceRange()
    {
        return $this->insuranceRange;
    }

    /**
     * @param string $insuranceRange
     */
    public function setInsuranceRange($insuranceRange)
    {
        $this->insuranceRange = $insuranceRange;

        return $this;
    }

    /**
     * @return integer
     */
    public function getTypeGamme()
    {
        return $this->typeGamme;
    }

    /**
     * @param integer $typeGamme
     */
    public function setTypeGamme($typeGamme)
    {
        $this->typeGamme = $typeGamme;

        return $this;
    }

    /**
     * @return integer
     */
    public function getParcelNumber()
    {
        return $this->parcelNumber;
    }

    /**
     * @param integer $parcelNumber
     */
    public function setParcelNumber($parcelNumber)
    {
        $this->parcelNumber = $parcelNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getReturnTypeChoice()
    {
        return $this->returnTypeChoice;
    }

    /**
     * @param string $returnTypeChoice
     */
    public function setReturnTypeChoice($returnTypeChoice)
    {
        $this->returnTypeChoice = $returnTypeChoice;

        return $this;
    }

    /**
     * @return integer
     */
    public function getInsuranceAmount()
    {
        return $this->insuranceAmount;
    }

    /**
     * @param integer $insuranceAmount
     */
    public function setInsuranceAmount($insuranceAmount)
    {
        $this->insuranceAmount = $insuranceAmount;

        return $this;
    }

    /**
     * @return integer
     */
    public function getInsuranceValue()
    {
        return $this->insuranceValue;
    }

    /**
     * @param integer $insuranceValue
     */
    public function setInsuranceValue($insuranceValue)
    {
        $this->insuranceValue = $insuranceValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecommendationLevel()
    {
        return $this->recommendationLevel;
    }

    /**
     * @param string $recommendationLevel
     */
    public function setRecommendationLevel($recommendationLevel)
    {
        $this->recommendationLevel = $recommendationLevel;

        return $this;
    }

    /**
     * @return integer
     */
    public function getRecommendationAmount()
    {
        return $this->recommendationAmount;
    }

    /**
     * @param integer $recommendationAmount
     */
    public function setRecommendationAmount($recommendationAmount)
    {
        $this->recommendationAmount = $recommendationAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getHorsGabarit()
    {
        return $this->horsGabarit;
    }

    /**
     * @param boolean $horsGabarit
     */
    public function setHorsGabarit($horsGabarit)
    {
        $this->horsGabarit = $horsGabarit;

        return $this;
    }

    /**
     * @return integer
     */
    public function getHorsGabaritAmount()
    {
        return $this->horsGabaritAmount;
    }

    /**
     * @param integer $horsGabaritAmount
     */
    public function setHorsGabaritAmount($horsGabaritAmount)
    {
        $this->horsGabaritAmount = $horsGabaritAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryMode()
    {
        return $this->deliveryMode;
    }

    /**
     * @param string $deliveryMode
     */
    public function setDeliveryMode($deliveryMode)
    {
        $this->deliveryMode = $deliveryMode;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnReceipt()
    {
        return $this->returnReceipt;
    }

    /**
     * @param boolean $returnReceipt
     */
    public function setReturnReceipt($returnReceipt)
    {
        $this->returnReceipt = $returnReceipt;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * @param boolean $recommendation
     */
    public function setRecommendation($recommendation)
    {
        $this->recommendation = $recommendation;

        return $this;
    }

    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * @param string $instructions
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * @return integer
     */
    public function getRegateCode()
    {
        return $this->regateCode;
    }

    /**
     * @param integer $regateCode
     */
    public function setRegateCode($regateCode)
    {
        $this->regateCode = $regateCode;

        return $this;
    }

    /**
     * @return array
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * @param array $contents
     */
    public function setContents(array $contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Add a content to the parcel
     *
     * @param Content $content
     */
    public function addContent(Content $content)
    {
        $this->contents[] = $content;

        return $this;
    }

    /**
     * Add validation rules
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('insuranceRange', new Assert\Regex(array('pattern' => '/^[0-9]{0|2}$/')));
        $metadata->addPropertyConstraint('insuranceAmount', new Assert\Regex(array('pattern' => '/^[0-9]*$/')));
        $metadata->addPropertyConstraint('insuranceValue', new Assert\Regex(array('pattern' => '/^[0-9]*$/')));

        $metadata->addPropertyConstraint('recommendationLevel', new Assert\Regex(array('pattern' => '/^[a-zA-Z0-9]+$/')));
        $metadata->addPropertyConstraint('recommendationAmount', new Assert\Regex(array('pattern' => '/^[0-9]*$/')));

        $metadata->addPropertyConstraint('weight', new Assert\NotBlank());
        $metadata->addPropertyConstraint('weight', new Assert\Type(array('type' => 'float')));
        $metadata->addPropertyConstraint('weight', new Assert\Range(array('min' => 0.01, 'max' => 30)));

        $metadata->addPropertyConstraint('horsGabarit', new Assert\Type(array('type' => 'boolean')));
        $metadata->addPropertyConstraint('horsGabaritAmount', new Assert\Type(array('type' => 'integer')));

        $metadata->addPropertyConstraint('deliveryMode', new Assert\NotBlank());
        $metadata->addPropertyConstraint('deliveryMode', new Assert\Choice(array(
            'callback' => array('\WSColissimo\WSColiPosteLetterService\Request\ValueObject\Choice\DeliveryMode', 'getChoices')
        )));

        $metadata->addPropertyConstraint('returnReceipt', new Assert\False());
        $metadata->addPropertyConstraint('recommendation', new Assert\False());

        $metadata->addPropertyConstraint('instructions', new Assert\Length(array('max' => 70)));
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
