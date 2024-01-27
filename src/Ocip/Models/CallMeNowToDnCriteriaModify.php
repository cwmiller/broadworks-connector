<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallMeNowToDnCriteriaModify
 *
 * The To dn criteria used on the call me now external number to be modified.
 *
 * @Groups [{"id":"adf9583170c1dc9ec6c152ba1238437a:259","type":"sequence"}]
 */
class CallMeNowToDnCriteriaModify
{
    /**
     * @ElementName toDnCriteriaSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection
     * @Optional
     * @Group adf9583170c1dc9ec6c152ba1238437a:259
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection|null
     */
    protected $toDnCriteriaSelection = null;

    /**
     * @ElementName phoneNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList
     * @Nillable
     * @Optional
     * @Group adf9583170c1dc9ec6c152ba1238437a:259
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $phoneNumberList = null;

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
    public function setPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList $phoneNumberList = null)
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

