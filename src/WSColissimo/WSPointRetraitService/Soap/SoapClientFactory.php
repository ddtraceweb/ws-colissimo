<?php

namespace WSColissimo\WSPointRetraitService\Soap;

use WSColissimo\WSPointRetraitService\Soap\TypeConverter\DateTimeTypeConverter;
use WSColissimo\WSPointRetraitService\Soap\TypeConverter\TypeConverterCollection;

/**
 * SoapClientFactory
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class SoapClientFactory
{
    /**
     * Default classmap
     *
     * @var array
     */
    protected $classmap = array(
        'findRDVPointRetraitAcheminement'    => '\WSColissimo\WSPointRetraitService\Request\FindRDVPointRetraitAcheminementRequest',
        'findRDVPointRetraitAcheminement'    => '\WSColissimo\WSPointRetraitService\Request\RDVPRRequest',
        'findPointRetraitAcheminementByID'   => '\WSColissimo\WSPointRetraitService\Request\FindPointRetraitAcheminementByIDRequest',
        'conges'                             => '\WSColissimo\WSPointRetraitService\Response\ValueObject\Conges',
        'pointRetraitAcheminement'           => '\WSColissimo\WSPointRetraitService\Response\ValueObject\PointRetraitAcheminement',
        'rdvPointRetraitAcheminementResult'  => '\WSColissimo\WSPointRetraitService\Response\FindRDVPointRetraitAcheminementResponse',
        'pointRetraitAcheminementByIDResult' => '\WSColissimo\WSPointRetraitService\Response\PointRetraitAcheminementByIDResponse',
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
