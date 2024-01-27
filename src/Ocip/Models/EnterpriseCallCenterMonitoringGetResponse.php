<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterMonitoringGetResponse
 *
 * Response to EnterpriseCallCenterMonitoringGetRequest.
 *
 * @see EnterpriseCallCenterMonitoringGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:2309","type":"sequence"}]
 */
class EnterpriseCallCenterMonitoringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableSupervisorCoaching
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:2309
     * @var bool|null
     */
    protected $enableSupervisorCoaching = null;

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

