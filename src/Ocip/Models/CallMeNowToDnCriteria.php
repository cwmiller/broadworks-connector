<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallMeNowToDnCriteria
 *
 * The To dn criteria used on the call me now external number.
 *
 * @Groups [{"id":"1f0f230fee2817fe00157925859dc28e:247","type":"sequence"}]
 */
class CallMeNowToDnCriteria
{

    /**
     * @ElementName toDnCriteriaSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection
     * @Group 1f0f230fee2817fe00157925859dc28e:247
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection|null
     */
    private $toDnCriteriaSelection = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group 1f0f230fee2817fe00157925859dc28e:247
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    private $phoneNumber = array(
        
    );

    /**
     * Getter for toDnCriteriaSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection
     */
    public function getToDnCriteriaSelection()
    {
        return $this->toDnCriteriaSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->toDnCriteriaSelection;
    }

    /**
     * Setter for toDnCriteriaSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection $toDnCriteriaSelection
     * @return $this
     */
    public function setToDnCriteriaSelection(\CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection $toDnCriteriaSelection)
    {
        $this->toDnCriteriaSelection = $toDnCriteriaSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetToDnCriteriaSelection()
    {
        $this->toDnCriteriaSelection = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(array $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }


}

