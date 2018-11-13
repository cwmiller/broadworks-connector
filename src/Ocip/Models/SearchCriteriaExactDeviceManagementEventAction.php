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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction|null
     */
    private $dmEventAction = null;

    /**
     * Getter for dmEventAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction
     */
    public function getDmEventAction()
    {
        return $this->dmEventAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dmEventAction;
    }

    /**
     * Setter for dmEventAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction $dmEventAction
     * @return $this
     */
    public function setDmEventAction(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventAction $dmEventAction)
    {
        $this->dmEventAction = $dmEventAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDmEventAction()
    {
        $this->dmEventAction = null;
        return $this;
    }


}

