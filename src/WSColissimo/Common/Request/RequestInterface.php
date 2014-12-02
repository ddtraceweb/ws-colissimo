<?php

namespace WSColissimo\Common\Request;

use WSColissimo\Common\Credentials;

/**
 * Interface for requests
 *
 * @author Gilles <gilles@1001pharmacies.com>
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
interface RequestInterface
{
    /**
     * Content of the request
     *
     * @return array
     */
    public function getContent();

    /**
     * Web service method name
     *
     * @return string
     */
    public function getMethod();

    /**
     * Set credentials of WS
     */
    public function setCredentials(Credentials $credentials);
}
