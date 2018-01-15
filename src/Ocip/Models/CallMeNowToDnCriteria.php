<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallMeNowToDnCriteria
 *
 * The To dn criteria used on the call me now external number.
 */
class CallMeNowToDnCriteria
{

    /**
     * @ElementName toDnCriteriaSelection
     * @var string|null
     */
    private $toDnCriteriaSelection = null;

    /**
     * @ElementName phoneNumber
     * @var string[]
     */
    private $phoneNumber = array(
        
    );

    /**
     * Getter for toDnCriteriaSelection
     *
     * @ElementName toDnCriteriaSelection
     * @return string|null
     */
    public function getToDnCriteriaSelection()
    {
        return $this->toDnCriteriaSelection;
    }

    /**
     * Setter for toDnCriteriaSelection
     *
     * @ElementName toDnCriteriaSelection
     * @param string|null $toDnCriteriaSelection
     * @return $this
     */
    public function setToDnCriteriaSelection($toDnCriteriaSelection)
    {
        $this->toDnCriteriaSelection = $toDnCriteriaSelection;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber($phoneNumber)
    {
        $this->phoneNumber []= $phoneNumber;
        return $this;
    }


}

