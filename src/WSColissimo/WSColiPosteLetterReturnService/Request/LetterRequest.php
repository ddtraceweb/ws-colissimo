<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request;

use WSColissimo\Common\Credentials;
use WSColissimo\Common\Request\RequestInterface;
use WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Letter;

/**
 * LetterRequest
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class LetterRequest implements RequestInterface
{
    /**
     * @var Letter
     */
    protected $letter;

    /**
     * @var Credentials
     */
    protected $credentials;

    /**
     * Contructor
     *
     * @param Letter $letter
     */
    public function __construct(Letter $letter = null)
    {
        $this->letter = $letter;
    }

    /**
     * Get letter
     *
     * @return Letter
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * Set letter
     *
     * @param Letter $letter
     *
     * @return self
     */
    public function setLetter(Letter $letter)
    {
        $this->letter = $letter;

        if (!empty($this->credentials)) {
            $this->letter->setCredentials($this->credentials);
        }
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
            'letter' => $this->getLetter(),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'getLetterRequest';
    }

    /**
     * {@inheritdoc}
     */
    public function setCredentials(Credentials $credentials)
    {
        $this->credentials = $credentials;

        if(!empty($this->letter)) {
            $this->letter->setCredentials($credentials);
        }
    }

    public function getCredentials()
    {
        return $this->credentials;
    }
}
