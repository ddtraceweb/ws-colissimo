<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * DestEnvVO
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class DestEnv
{
    /**
     * @var string
     */
    protected $ref;

    /**
     * @var DestAddress
     */
    protected $addressVO;

    /**
     * @var boolean
     */
    protected $codeBarForreference;

    /**
     * Constructor
     *
     * @param Address $address
     */
    public function __construct(AddressDest $address = null)
    {
        $this->addressVO           = $address;
        $this->codeBarForreference = false;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return the DestAddress
     */
    public function getAddressVO()
    {
        return $this->addressVO;
    }

    /**
     * @param string $addressVO
     */
    public function setAddressVO($addressVO)
    {
        $this->addressVO = $addressVO;

        return $this;
    }

    /**
     * @return the boolean
     */
    public function getCodeBarForreference()
    {
        return $this->codeBarForreference;
    }

    /**
     * @param string $codeBarForreference
     */
    public function setCodeBarForreference($codeBarForreference)
    {
        $this->codeBarForreference = $codeBarForreference;

        return $this;
    }

    /**
     * Add validation rules
     *
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('ref', new Assert\Blank());

        $metadata->addPropertyConstraint('addressVO', new Assert\NotBlank());
        $metadata->addPropertyConstraint('addressVO', new Assert\Valid());

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
