<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventStatusCompleted
 *
 * Criteria for searching for a particular fully specified Device Management
 * completed event status.
 */
class SearchCriteriaExactDeviceManagementEventStatusCompleted extends SearchCriteria
{

    /**
     * @ElementName dmEventStatusCompleted
     * @var string|null
     */
    private $dmEventStatusCompleted = null;

    /**
     * Getter for dmEventStatusCompleted
     *
     * @ElementName dmEventStatusCompleted
     * @return string|null
     */
    public function getDmEventStatusCompleted()
    {
        return $this->dmEventStatusCompleted;
    }

    /**
     * Setter for dmEventStatusCompleted
     *
     * @ElementName dmEventStatusCompleted
     * @param string|null $dmEventStatusCompleted
     * @return $this
     */
    public function setDmEventStatusCompleted($dmEventStatusCompleted)
    {
        $this->dmEventStatusCompleted = $dmEventStatusCompleted;
        return $this;
    }


}

