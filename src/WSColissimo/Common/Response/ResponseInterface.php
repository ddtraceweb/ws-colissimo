<?php

namespace WSColissimo\Common\Response;

/**
 * ResponseInterface
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
interface ReponseInterface
{
    /**
     * Is response successful ?
     *
     * @return boolean
     */
    public function isSuccess();

    /**
     * Get error message
     *
     * @return string
     */
    public function getErrorMessage();
}
