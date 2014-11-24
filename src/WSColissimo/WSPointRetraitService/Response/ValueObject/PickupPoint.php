<?php

namespace WSColissimo\WSPointRetraitService\Response\ValueObject;

use WSColissimo\WSPointRetraitService\Response\ValueObject\Vacancy;

/**
 * PickupPoint
 *
 * @author Kevin Monmousseau <kevin@1001pharmacies.com>
 */
class PickupPoint
{
    /**
     * @var boolean
     */
    protected $accesPersonneMobiliteReduite;

    /**
     * @var string
     */
    protected $adresse1;

    /**
     * @var string
     */
    protected $adresse2;

    /**
     * @var string
     */
    protected $adresse3;

    /**
     * @var string
     */
    protected $codePostal;

    /**
     * @var boolean
     */
    protected $congesPartiel;

    /**
     * @var boolean
     */
    protected $congesTotal;

    /**
     * @var string
     */
    protected $coordGeolocalisationLatitude;

    /**
     * @var string
     */
    protected $coordGeolocalisationLongitude;

    /**
     * @var integer
     */
    protected $distanceEnMetre;

    /**
     * @var string
     */
    protected $horairesOuvertureLundi;

    /**
     * @var string
     */
    protected $horairesOuvertureMardi;

    /**
     * @var string
     */
    protected $horairesOuvertureMercredi;

    /**
     * @var string
     */
    protected $horairesOuvertureJeudi;

    /**
     * @var string
     */
    protected $horairesOuvertureVendredi;

    /**
     * @var string
     */
    protected $horairesOuvertureSamedi;

    /**
     * @var string
     */
    protected $horairesOuvertureDimanche;

    /**
     * @var string
     */
    protected $identifiant;

    /**
     * @var string
     */
    protected $indiceDeLocalisation;

    /**
     * @var array
     */
    protected $listeConges;

    /**
     * @var string
     */
    protected $localite;

    /**
     * @var string
     */
    protected $nom;

    /**
     * @var string
     */
    protected $periodeActiviteHoraireDeb;

    /**
     * @var string
     */
    protected $periodeActiviteHoraireFin;

    /**
     * @var integer
     */
    protected $poidsMaxi;

    /**
     * @var string
     */
    protected $typeDePoint;

    /**
     * @var string
     */
    protected $codePays;

    /**
     * @var string
     */
    protected $langue;

    /**
     * @var string
     */
    protected $libellePays;

    /**
     * @var boolean
     */
    protected $loanOfHandlingTool;

    /**
     * @var boolean
     */
    protected $parking;

    /**
     * @var string
     */
    protected $reseau;

    /**
     * @var string
     */
    protected $distributionSort;

    /**
     * @var string
     */
    protected $lotAcheminement;

    /**
     * @var string
     */
    protected $versionPlanTri;

    /**
     * Getter for adresse1
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->adresse1;
    }

    /**
     * Getter for accesPersonneMobiliteReduite
     *
     * @return boolean
     */
    public function getReducedMobilityAccess()
    {
        return $this->accesPersonneMobiliteReduite;
    }

    /**
     * Setter for accesPersonneMobiliteReduite
     *
     * @param boolean $accesPersonneMobiliteReduite
     *
     * @return self
     */
    public function setReducedMobilityAccess($accesPersonneMobiliteReduite)
    {
        $this->accesPersonneMobiliteReduite = $accesPersonneMobiliteReduite;

        return $this;
    }

    /**
     * Setter for adresse1
     *
     * @param string $adresse1
     *
     * @return self
     */
    public function setAddress($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Getter for adresse2
     *
     * @return string
     */
    public function getAdditionalAddress()
    {
        return $this->adresse2;
    }

    /**
     * Setter for adresse2
     *
     * @param string $adresse2
     *
     * @return self
     */
    public function setAdditionalAddress($address2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Getter for adresse3
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->adresse3;
    }

    /**
     * Setter for adresse3
     *
     * @param string $adresse3
     *
     * @return self
     */
    public function setLocality($adresse3)
    {
        $this->adresse3 = $adresse3;

        return $this;
    }

    /**
     * Getter for codePostal
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->codePostal;
    }

    /**
     * Setter for codePostal
     *
     * @param string $codePostal
     *
     * @return self
     */
    public function setZipCode($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Getter for congesPartiel
     *
     * @return boolean
     */
    public function getPartialVacation()
    {
        return $this->congesPartiel;
    }

    /**
     * Setter for congesPartiel
     *
     * @param boolean $congesPartiel
     *
     * @return self
     */
    public function setPartialVacation($congesPartiel)
    {
        $this->congesPartiel = $congesPartiel;

        return $this;
    }

    /**
     * Getter for congesTotal
     *
     * @return boolean
     */
    public function getFullVacation()
    {
        return $this->congesTotal;
    }

    /**
     * Setter for congesTotal
     *
     * @param boolean $congesTotal
     *
     * @return self
     */
    public function setFullVacation($congesTotal)
    {
        $this->congesTotal = $congesTotal;

        return $this;
    }

    /**
     * Getter for coordGeolocalisationLatitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->coordGeolocalisationLatitude;
    }

    /**
     * Setter for coordGeolocalisationLatitude
     *
     * @param string $coordGeolocalisationLatitude
     *
     * @return self
     */
    public function setLatitude($coordGeolocalisationLatitude)
    {
        $this->coordGeolocalisationLatitude = $coordGeolocalisationLatitude;

        return $this;
    }

    /**
     * Getter for coordGeolocalisationLongitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->coordGeolocalisationLongitude;
    }

    /**
     * Setter for coordGeolocalisationLongitude
     *
     * @param string $coordGeolocalisationLongitude
     *
     * @return self
     */
    public function setLongitude($coordGeolocalisationLongitude)
    {
        $this->coordGeolocalisationLongitude = $coordGeolocalisationLongitude;

        return $this;
    }

    /**
     * Getter for distanceEnMetre
     *
     * @return integer
     */
    public function getDistanceInMeters()
    {
        return $this->distanceEnMetre;
    }

    /**
     * Setter for distanceEnMetre
     *
     * @param integer $distanceEnMetre
     *
     * @return self
     */
    public function setDistanceInMeters($distanceEnMetre)
    {
        $this->distanceEnMetre = $distanceEnMetre;

        return $this;
    }

    /**
     * Getter for horairesOuvertureLundi
     *
     * @return string
     */
    public function getMondayTimetable()
    {
        return $this->horairesOuvertureLundi;
    }

    /**
     * Setter for horairesOuvertureLundi
     *
     * @param string $horairesOuvertureLundi
     *
     * @return self
     */
    public function setMondayTimetable($horairesOuvertureLundi)
    {
        $this->horairesOuvertureLundi = $horairesOuvertureLundi;

        return $this;
    }

    /**
     * Getter for horairesOuvertureMardi
     *
     * @return string
     */
    public function getTuesdayTimetable()
    {
        return $this->horairesOuvertureMardi;
    }

    /**
     * Setter for horairesOuvertureMardi
     *
     * @param string $horairesOuvertureMardi
     *
     * @return self
     */
    public function setTuesdayTimetable($horairesOuvertureMardi)
    {
        $this->horairesOuvertureMardi = $horairesOuvertureMardi;

        return $this;
    }

    /**
     * Getter for horairesOuvertureMercredi
     *
     * @return string
     */
    public function getWednesdayTimetable()
    {
        return $this->horairesOuvertureMercredi;
    }

    /**
     * Setter for horairesOuvertureMercredi
     *
     * @param string $horairesOuvertureMercredi
     *
     * @return self
     */
    public function setWednesdayTimetable($horairesOuvertureMercredi)
    {
        $this->horairesOuvertureMercredi = $horairesOuvertureMercredi;

        return $this;
    }

    /**
     * Getter for horairesOuvertureJeudi
     *
     * @return string
     */
    public function getThursdayTimetable()
    {
        return $this->horairesOuvertureJeudi;
    }

    /**
     * Setter for horairesOuvertureJeudi
     *
     * @param string $horairesOuvertureJeudi
     *
     * @return self
     */
    public function setThursdayTimetable($horairesOuvertureJeudi)
    {
        $this->horairesOuvertureJeudi = $horairesOuvertureJeudi;

        return $this;
    }

    /**
     * Getter for horairesOuvertureVendredi
     *
     * @return
     */
    public function getFridayTimetable()
    {
        return $this->horairesOuvertureVendredi;
    }

    /**
     * Setter for horairesOuvertureVendredi
     *
     * @param  $horairesOuvertureVendredi
     *
     * @return self
     */
    public function setFridayTimetable($horairesOuvertureVendredi)
    {
        $this->horairesOuvertureVendredi = $horairesOuvertureVendredi;

        return $this;
    }

    /**
     * Getter for horairesOuvertureSamedi
     *
     * @return string
     */
    public function getSaturdayTimetable()
    {
        return $this->horairesOuvertureSamedi;
    }

    /**
     * Setter for horairesOuvertureSamedi
     *
     * @param string $horairesOuvertureSamedi
     *
     * @return self
     */
    public function setSaturdayTimetable($horairesOuvertureSamedi)
    {
        $this->horairesOuvertureSamedi = $horairesOuvertureSamedi;

        return $this;
    }

    /**
     * Getter for horairesOuvertureDimanche
     *
     * @return string
     */
    public function getSundayTimetable()
    {
        return $this->horairesOuvertureDimanche;
    }

    /**
     * Setter for horairesOuvertureDimanche
     *
     * @param string $horairesOuvertureDimanche
     *
     * @return self
     */
    public function setSundayTimetable($horairesOuvertureDimanche)
    {
        $this->horairesOuvertureDimanche = $horairesOuvertureDimanche;

        return $this;
    }

    /**
     * Getter for identifiant
     *
     * @return string
     */
    public function getId()
    {
        return $this->identifiant;
    }

    /**
     * Setter for identifiant
     *
     * @param string $identifiant
     *
     * @return self
     */
    public function setId($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Getter for indiceDeLocalisation
     *
     * @return string
     */
    public function getLocalizationClue()
    {
        return $this->indiceDeLocalisation;
    }

    /**
     * Setter for indiceDeLocalisation
     *
     * @param string $indiceDeLocalisation
     *
     * @return self
     */
    public function setLocalizationClue($indiceDeLocalisation)
    {
        $this->indiceDeLocalisation = $indiceDeLocalisation;

        return $this;
    }

    /**
     * Getter for listeConges
     *
     * @return array
     */
    public function getVacationList()
    {
        return $this->listeConges;
    }

    /**
     * Setter for listeConges
     *
     * @param array $listeConges
     *
     * @return self
     */
    public function setVacationList($listeConges)
    {
        $this->listeConges = $listeConges;

        return $this;
    }

    /**
     * Getter for localite
     *
     * @return string
     */
    public function getCity()
    {
        return $this->localite;
    }

    /**
     * Setter for localite
     *
     * @param string $localite
     *
     * @return self
     */
    public function setCity($localite)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Getter for nom
     *
     * @return string
     */
    public function getName()
    {
        return $this->nom;
    }

    /**
     * Setter for nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setName($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Getter for periodeActiviteHoraireDeb
     *
     * @return string
     */
    public function getPeriodStartTimeslot()
    {
        return $this->periodeActiviteHoraireDeb;
    }

    /**
     * Setter for periodeActiviteHoraireDeb
     *
     * @param string $periodeActiviteHoraireDeb
     *
     * @return self
     */
    public function setPeriodStartTimeslot($periodeActiviteHoraireDeb)
    {
        $this->periodeActiviteHoraireDeb = $periodeActiviteHoraireDeb;

        return $this;
    }

    /**
     * Getter for periodeActiviteHoraireFin
     *
     * @return string
     */
    public function getPeriodEndTimeslot()
    {
        return $this->periodeActiviteHoraireFin;
    }

    /**
     * Setter for periodeActiviteHoraireFin
     *
     * @param string $periodeActiviteHoraireFin
     *
     * @return self
     */
    public function setPeriodEndTimeslot($periodeActiviteHoraireFin)
    {
        $this->periodeActiviteHoraireFin = $periodeActiviteHoraireFin;

        return $this;
    }

    /**
     * Getter for poidsMaxi
     *
     * @return integer
     */
    public function getMaxWeight()
    {
        return $this->poidsMaxi;
    }

    /**
     * Setter for poidsMaxi
     *
     * @param integer $poidsMaxi
     *
     * @return self
     */
    public function setMaxWeight($poidsMaxi)
    {
        $this->poidsMaxi = $poidsMaxi;

        return $this;
    }

    /**
     * Getter for typeDePoint
     *
     * @return string
     */
    public function getPointType()
    {
        return $this->typeDePoint;
    }

    /**
     * Setter for typeDePoint
     *
     * @param string $typeDePoint
     *
     * @return self
     */
    public function setPointType($typeDePoint)
    {
        $this->typeDePoint = $typeDePoint;

        return $this;
    }

    /**
     * Getter for codePays
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->codePays;
    }

    /**
     * Setter for codePays
     *
     * @param string $codePays
     *
     * @return self
     */
    public function setCountryCode($codePays)
    {
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Getter for langue
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->langue;
    }

    /**
     * Setter for langue
     *
     * @param string $langue
     *
     * @return self
     */
    public function setLanguage($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Getter for libellePays
     *
     * @return string
     */
    public function getCountryLabel()
    {
        return $this->libellePays;
    }

    /**
     * Setter for libellePays
     *
     * @param string $libellePays
     *
     * @return self
     */
    public function setCountryLabel($libellePays)
    {
        $this->libellePays = $libellePays;

        return $this;
    }

    /**
     * Getter for loanOfHandlingTool
     *
     * @return boolean
     */
    public function getLoanOfHandlingTool()
    {
        return $this->loanOfHandlingTool;
    }

    /**
     * Setter for loanOfHandlingTool
     *
     * @param boolean $loanOfHandlingTool
     *
     * @return self
     */
    public function setLoanOfHandlingTool($loanOfHandlingTool)
    {
        $this->loanOfHandlingTool = $loanOfHandlingTool;

        return $this;
    }

    /**
     * Getter for parking
     *
     * @return boolean
     */
    public function getHasParking()
    {
        return $this->parking;
    }

    /**
     * Setter for parking
     *
     * @param boolean $parking
     *
     * @return self
     */
    public function setHasParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Getter for reseau
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->reseau;
    }

    /**
     * Setter for reseau
     *
     * @param string $reseau
     *
     * @return self
     */
    public function setNetwork($reseau)
    {
        $this->reseau = $reseau;

        return $this;
    }

    /**
     * Getter for distributionSort
     *
     * @return string
     */
    public function getDistributionSort()
    {
        return $this->distributionSort;
    }

    /**
     * Setter for distributionSort
     *
     * @param string $distributionSort
     *
     * @return self
     */
    public function setDistributionSort($distributionSort)
    {
        $this->distributionSort = $distributionSort;

        return $this;
    }

    /**
     * Getter for lotAcheminement
     *
     * @return string
     */
    public function getDeliveryLot()
    {
        return $this->lotAcheminement;
    }

    /**
     * Setter for lotAcheminement
     *
     * @param string $lotAcheminement
     *
     * @return self
     */
    public function setDeliveryLot($lotAcheminement)
    {
        $this->lotAcheminement = $lotAcheminement;

        return $this;
    }

    /**
     * Getter for versionPlanTri
     *
     * @return string
     */
    public function getSortPlanningVersion()
    {
        return $this->versionPlanTri;
    }

    /**
     * Setter for versionPlanTri
     *
     * @param string $versionPlanTri
     *
     * @return self
     */
    public function setSortPlanningVersion($versionPlanTri)
    {
        $this->versionPlanTri = $versionPlanTri;

        return $this;
    }
}
