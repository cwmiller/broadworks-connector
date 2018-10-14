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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection|null
     */
    private $toDnCriteriaSelection = null;

    /**
     * @ElementName phoneNumberList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null
     */
    private $phoneNumberList = null;

    /**
     * Getter for toDnCriteriaSelection
     *
     * @ElementName toDnCriteriaSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection|null
     */
    public function getToDnCriteriaSelection()
    {
        return $this->toDnCriteriaSelection;
    }

    /**
     * Setter for toDnCriteriaSelection
     *
     * @ElementName toDnCriteriaSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection|null $toDnCriteriaSelection
     * @return $this
     */
    public function setToDnCriteriaSelection(\CWM\BroadWorksConnector\Ocip\Models\CriteriaDnSelection $toDnCriteriaSelection)
    {
        $this->toDnCriteriaSelection = $toDnCriteriaSelection;
        return $this;
    }

    /**
     * Getter for phoneNumberList
     *
     * @ElementName phoneNumberList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null
     */
    public function getPhoneNumberList()
    {
        return $this->phoneNumberList;
    }

    /**
     * Setter for phoneNumberList
     *
     * @ElementName phoneNumberList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList|null $phoneNumberList
     * @return $this
     */
    public function setPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\CriteriaReplacementDNList $phoneNumberList)
    {
        $this->phoneNumberList = $phoneNumberList;
        return $this;
    }


}

