<?php

namespace WSColissimo\WSPointRetraitService\Response\ValueObject;

/**
 * Vacation
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class Vacation
{
    /**
     * @var \DateTime
     */
    protected $calendarDeDebut;

    /**
     * @var \DateTime
     */
    protected $calendarDeFin;

    /**
     * @var integer
     */
    protected $numero;

    /**
     * Getter for calendarDeDebut
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->calendarDeDebut;
    }

    /**
     * Setter for calendarDeDebut
     *
     * @param \DateTime $calendarDeDebut
     *
     * @return self
     */
    public function setStartDate(\DateTime $calendarDeDebut)
    {
        $this->calendarDeDebut = $calendarDeDebut;

        return $this;
    }

    /**
     * Getter for calendarDeFin
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->calendarDeFin;
    }

    /**
     * Setter for calendarDeFin
     *
     * @param \DateTime $calendarDeFin
     *
     * @return self
     */
    public function setEndDate(\DateTime $calendarDeFin)
    {
        $this->calendarDeFin = $calendarDeFin;

        return $this;
    }

    /**
     * Getter for numero
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->numero;
    }

    /**
     * Setter for numero
     *
     * @param integer $numero
     *
     * @return self
     */
    public function setNumber($numero)
    {
        $this->numero = $numero;

        return $this;
    }

}
