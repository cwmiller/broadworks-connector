<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetResponse17
 *
 * Response to the UserSimultaneousRingFamilyGetRequest17.
 *         Contains a criteria table wich column heading: "Is Active", "Criteria
 * Name", "Time Schedule", "Holiday Schedule", "Calls From" and "Blacklisted".
 *
 * @see UserSimultaneousRingFamilyGetRequest17
 */
class UserSimultaneousRingFamilyGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName doNotRingIfOnCall
     * @var bool|null
     */
    private $doNotRingIfOnCall = null;

    /**
     * @ElementName simultaneousRingNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[]
     */
    private $simultaneousRingNumber = array(
        
    );

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for doNotRingIfOnCall
     *
     * @ElementName doNotRingIfOnCall
     * @return bool|null
     */
    public function getDoNotRingIfOnCall()
    {
        return $this->doNotRingIfOnCall;
    }

    /**
     * Setter for doNotRingIfOnCall
     *
     * @ElementName doNotRingIfOnCall
     * @param bool|null $doNotRingIfOnCall
     * @return $this
     */
    public function setDoNotRingIfOnCall($doNotRingIfOnCall)
    {
        $this->doNotRingIfOnCall = $doNotRingIfOnCall;
        return $this;
    }

    /**
     * Getter for simultaneousRingNumber
     *
     * @ElementName simultaneousRingNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[]
     */
    public function getSimultaneousRingNumber()
    {
        return $this->simultaneousRingNumber;
    }

    /**
     * Setter for simultaneousRingNumber
     *
     * @ElementName simultaneousRingNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[] $simultaneousRingNumber
     * @return $this
     */
    public function setSimultaneousRingNumber(array $simultaneousRingNumber)
    {
        $this->simultaneousRingNumber = $simultaneousRingNumber;
        return $this;
    }

    /**
     * Adder for simultaneousRingNumber
     *
     * @ElementName simultaneousRingNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber $simultaneousRingNumber
     * @return $this
     */
    public function addSimultaneousRingNumber($simultaneousRingNumber)
    {
        $this->simultaneousRingNumber []= $simultaneousRingNumber;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @ElementName criteriaTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @ElementName criteriaTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $criteriaTable
     * @return $this
     */
    public function setCriteriaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }


}

