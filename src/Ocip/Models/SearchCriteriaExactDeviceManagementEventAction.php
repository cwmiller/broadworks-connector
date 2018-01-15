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
     * @var string|null
     */
    private $dmEventAction = null;

    /**
     * Getter for dmEventAction
     *
     * @ElementName dmEventAction
     * @return string|null
     */
    public function getDmEventAction()
    {
        return $this->dmEventAction;
    }

    /**
     * Setter for dmEventAction
     *
     * @ElementName dmEventAction
     * @param string|null $dmEventAction
     * @return $this
     */
    public function setDmEventAction($dmEventAction)
    {
        $this->dmEventAction = $dmEventAction;
        return $this;
    }


}

