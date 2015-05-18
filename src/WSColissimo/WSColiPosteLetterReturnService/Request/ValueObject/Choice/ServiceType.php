<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Choice;

/**
 * ServiceType
 */
class ServiceType
{
    const FRANCE           = '8R';
    const INTERNATIONAL    = '7R';

    /**
     * Return an array of the class constants
     *
     * @return array
     */
    public static function getChoices()
    {
        $choices = array();

        $reflect = new \ReflectionClass(__CLASS__);
        $constants = array_keys($reflect->getConstants());

        foreach ($constants as $constant) {
            $choices[] = $reflect->getConstant($constant);
        }

        return $choices;
    }
}
