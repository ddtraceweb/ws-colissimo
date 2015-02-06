<?php

namespace WSColissimo\WSColiPosteLetterReturnService\Soap;

use WSColissimo\WSColiPosteLetterReturnService\Soap\TypeConverter\DateTimeTypeConverter;
use WSColissimo\WSColiPosteLetterReturnService\Soap\TypeConverter\TypeConverterCollection;

/**
 * SoapClientFactory
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class SoapClientFactory
{
    /**
     * Default classmap
     *
     * @var array
     */
    protected $classmap = array(
        'ServiceCallContextV2'       => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\ServiceCallContext',
        'ArticleVO'                  => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Article',
        'ContentsVO'                 => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Content',
        'ParcelVO'                   => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Parcel',
        'AddressVO'                  => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Address',
        'DestEnvVO'                  => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\DestEnv',
        'ExpEnvVO'                   => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\ExpEnv',
        'LetterVO'                   => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Letter',
        'Letter'                     => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Letter',
        // 'getLetterColissimo'         => '\WSColissimo\WSColiPosteLetterReturnService\Request\LetterColissimoRequest',
        'ReturnLetterVO'             => '\WSColissimo\WSColiPosteLetterReturnService\Response\ValueObject\ReturnLetter',
        'getLetterColissimoResponse' => '\WSColissimo\WSColiPosteLetterReturnService\Response\LetterColissimoResponse',
    );

    /**
     * Type converters collection
     *
     * @var TypeConverterCollection
     */
    protected $typeConverters;

    /**
     * @param string $wsdl Some argument description
     *
     * @return \SoapClient
     */
    public function create($wsdl)
    {
        return new \SoapClient($wsdl, array(
            'trace'     => 1,
            'features'  => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap'  => $this->classmap,
            'typemap'   => $this->getTypeConverters()->getTypemap()
        ));
    }

    /**
     * test
     *
     * @param string $soap SOAP class
     * @param string $php  PHP class
     */
    public function setClassmapping($soap, $php)
    {
        $this->classmap[$soap] = $php;
    }

    /**
     * Get type converter collection that will be used for the \SoapClient
     *
     * @return TypeConverterCollection
     */
    public function getTypeConverters()
    {
        if (null === $this->typeConverters) {
            $this->typeConverters = new TypeConverterCollection(
                array(
                    new DateTimeTypeConverter()
                )
            );
        }

        return $this->typeConverters;
    }

    /**
     * Set type converter collection
     *
     * @param type $typeConverters Type converter collection
     *
     * @return SoapClientFactory
     */
    public function setTypeConverters(TypeConverterCollection $typeConverters)
    {
        $this->typeConverters = $typeConverters;

        return $this;
    }
}
