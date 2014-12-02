<?php

namespace WSColissimo\Common;

/**
 * Credentials for Soap Connection
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class Credentials
{
    /**
     * @var String
     */
    private $accountNumber;

    /**
     * @var String
     */
    private $password;

    public function __construct($accountNumber, $password)
    {
        $this->accountNumber = $accountNumber;
        $this->password = $password;
    }

    /**
     * Getter for accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Setter for accountNumber
     *
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
     * Getter for password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Setter for password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
