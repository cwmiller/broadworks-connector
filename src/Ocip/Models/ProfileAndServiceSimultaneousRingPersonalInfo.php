<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceSimultaneousRingPersonalInfo
 *
 * This is the configuration parameters for Simultaneous Ring Personal  service
 *         	
 *         	Contains a criteria table with column heading: "Is Active", "Criteria Name", "Time Schedule", "Holiday Schedule", "Calls From" and "Blacklisted".
 *         	
 *         	The "Calls From" column is a string containing call numbers
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4552","type":"sequence"}]
 */
class ProfileAndServiceSimultaneousRingPersonalInfo
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4552
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName doNotRingIfOnCall
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4552
     * @var bool|null
     */
    protected $doNotRingIfOnCall = null;

    /**
     * @ElementName simultaneousRingNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4552
     * @var \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[]
     */
    protected $simultaneousRingNumber = [
        
    ];

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4552
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $criteriaTable = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for doNotRingIfOnCall
     *
     * @return bool
     */
    public function getDoNotRingIfOnCall()
    {
        return $this->doNotRingIfOnCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->doNotRingIfOnCall;
    }

    /**
     * Setter for doNotRingIfOnCall
     *
     * @param bool $doNotRingIfOnCall
     * @return $this
     */
    public function setDoNotRingIfOnCall($doNotRingIfOnCall)
    {
        $this->doNotRingIfOnCall = $doNotRingIfOnCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDoNotRingIfOnCall()
    {
        $this->doNotRingIfOnCall = null;
        return $this;
    }

    /**
     * Getter for simultaneousRingNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[]
     */
    public function getSimultaneousRingNumber()
    {
        return $this->simultaneousRingNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->simultaneousRingNumber;
    }

    /**
     * Setter for simultaneousRingNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[] $simultaneousRingNumber
     * @return $this
     */
    public function setSimultaneousRingNumber(array $simultaneousRingNumber)
    {
        $this->simultaneousRingNumber = $simultaneousRingNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSimultaneousRingNumber()
    {
        $this->simultaneousRingNumber = null;
        return $this;
    }

    /**
     * Adder for simultaneousRingNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber $simultaneousRingNumber
     * @return $this
     */
    public function addSimultaneousRingNumber($simultaneousRingNumber)
    {
        $this->simultaneousRingNumber[] = $simultaneousRingNumber;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable
     * @return $this
     */
    public function setCriteriaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaTable()
    {
        $this->criteriaTable = null;
        return $this;
    }
}

