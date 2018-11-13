<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallMeNowToDnCriteriaModify
 *
 * The To dn criteria used on the call me now external number to be modified.
 */
class CallMeNowToDnCriteriaModify
{

    /**
     * @ElementName toDnCriteriaSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection|null
     */
    private $toDnCriteriaSelection = null;

    /**
     * @ElementName phoneNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumberList = null;

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
     * Getter for phoneNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null
     */
    public function getPhoneNumberList()
    {
        return $this->phoneNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberList;
    }

    /**
     * Setter for phoneNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null $phoneNumberList
     * @return $this
     */
    public function setPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList $phoneNumberList)
    {
        if ($phoneNumberList === null) {
            $this->phoneNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumberList = $phoneNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumberList()
    {
        $this->phoneNumberList = null;
        return $this;
    }


}

