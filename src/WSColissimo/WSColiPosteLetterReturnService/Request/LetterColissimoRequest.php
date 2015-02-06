<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request;

use WSColissimo\Common\Credentials;
use WSColissimo\Common\Request\RequestInterface;
use WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Letter;

/**
 * LetterColissimoRequest
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class LetterColissimoRequest implements RequestInterface
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
     * @return Letter
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * @param Letter $letter
     */
    public function setLetter(Letter $letter)
    {
        $this->letter = $letter;
        $this->getLetter()->setContractNumber($credentials->getAccountNumber());
        $this->getLetter()->setPassword($credentials->getPassword());
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
        return 'getLetterColissimo';
    }

    /**
     * {@inheritdoc}
     */
    public function setCredentials(Credentials $credentials)
    {
        $this->credentials = $credentials;

        if(!empty($this->letter)) {
            $this->getLetter()->setContractNumber($credentials->getAccountNumber());
            $this->getLetter()->setPassword($credentials->getPassword());
        }
    }

    public function getCredentials()
    {
        return $this->credentials;
    }
}
