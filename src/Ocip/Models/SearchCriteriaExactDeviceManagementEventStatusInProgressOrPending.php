<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending
 *
 * Criteria for searching for a particular fully specified Device Management event
 * in progress or pending status.
 */
class SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending extends SearchCriteria
{

    /**
     * @ElementName dmEventStatusInProgressOrPending
     * @var string|null
     */
    private $dmEventStatusInProgressOrPending = null;

    /**
     * Getter for dmEventStatusInProgressOrPending
     *
     * @ElementName dmEventStatusInProgressOrPending
     * @return string|null
     */
    public function getDmEventStatusInProgressOrPending()
    {
        return $this->dmEventStatusInProgressOrPending;
    }

    /**
     * Setter for dmEventStatusInProgressOrPending
     *
     * @ElementName dmEventStatusInProgressOrPending
     * @param string|null $dmEventStatusInProgressOrPending
     * @return $this
     */
    public function setDmEventStatusInProgressOrPending($dmEventStatusInProgressOrPending)
    {
        $this->dmEventStatusInProgressOrPending = $dmEventStatusInProgressOrPending;
        return $this;
    }


}

