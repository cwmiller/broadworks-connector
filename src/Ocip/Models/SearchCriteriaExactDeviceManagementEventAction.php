<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventAction
 *
 * Criteria for searching for a particular fully specified DeviceManagement event
 * action.
 */
class SearchCriteriaExactDeviceManagementEventAction extends SearchCriteria
{

    /**
     * @ElementName dmEventAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction|null
     */
    private $dmEventAction = null;

    /**
     * Getter for dmEventAction
     *
     * @ElementName dmEventAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction|null
     */
    public function getDmEventAction()
    {
        return $this->dmEventAction;
    }

    /**
     * Setter for dmEventAction
     *
     * @ElementName dmEventAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction|null $dmEventAction
     * @return $this
     */
    public function setDmEventAction(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction $dmEventAction)
    {
        $this->dmEventAction = $dmEventAction;
        return $this;
    }


}

