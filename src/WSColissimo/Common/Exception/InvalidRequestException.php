<?php

namespace WSColissimo\Common\Exception;

use Symfony\Component\Validator\ConstraintViolationListInterface;

/**
 * Invalid Request Exception
 * Thrown when request not valid
 *
 * @author Gilles <gilles@1001pharmacies.com>
 */
class InvalidRequestException extends \Exception
{
    /**
     * @var ConstraintViolationListInterface
     */
    private $violations;

    /**
     * @param ConstraintViolationListInterface $violations
     */
    public function __construct(ConstraintViolationListInterface $violations)
    {
        $this->violations = $violations;

        parent::__construct($this->violations->__toString());
    }

    /**
     * Violations
     *
     * @return ConstraintViolationListInterface
     */
    public function getViolations()
    {
        return $this->violations;
    }
}
