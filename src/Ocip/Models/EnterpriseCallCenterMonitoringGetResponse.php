<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterMonitoringGetResponse
 *
 * Response to EnterpriseCallCenterMonitoringGetRequest.
 *
 * @see EnterpriseCallCenterMonitoringGetRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2221","type":"sequence"}]
 */
class EnterpriseCallCenterMonitoringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSupervisorCoaching
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2221
     * @var bool|null
     */
    private $enableSupervisorCoaching = null;

    /**
     * Getter for enableSupervisorCoaching
     *
     * @return bool
     */
    public function getEnableSupervisorCoaching()
    {
        return $this->enableSupervisorCoaching instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSupervisorCoaching;
    }

    /**
     * Setter for enableSupervisorCoaching
     *
     * @param bool $enableSupervisorCoaching
     * @return $this
     */
    public function setEnableSupervisorCoaching($enableSupervisorCoaching)
    {
        $this->enableSupervisorCoaching = $enableSupervisorCoaching;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSupervisorCoaching()
    {
        $this->enableSupervisorCoaching = null;
        return $this;
    }


}

