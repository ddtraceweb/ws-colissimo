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
        'ServiceCallContext'            => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\ServiceCallContext',
        'Parcel'                        => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Article',
        'CompanyType'                   => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Company',
        'PersonType'                   => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Person',
        'Address'                       => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Address',
        'DestEnv'                     => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\DestEnv',
        'ExpEnv'                      => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\ExpEnv',
        'Letter'                        => '\WSColissimo\WSColiPosteLetterReturnService\Request\ValueObject\Letter',
        // 'getLetterRequest'             => '\WSColissimo\WSColiPosteLetterReturnService\Request\LetterRequest',
        'ReturnLetter'                => '\WSColissimo\WSColiPosteLetterReturnService\Response\ValueObject\ReturnLetter',
        'getLetterResponse'    => '\WSColissimo\WSColiPosteLetterReturnService\Response\LetterColissimoResponse',
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
