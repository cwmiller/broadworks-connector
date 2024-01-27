<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterMonitoringGetResponse23
 *
 * Response to EnterpriseCallCenterMonitoringGetRequest23.
 *
 * @see EnterpriseCallCenterMonitoringGetRequest23
 * @Groups [{"id":"b5e86c5d60603bdb61de308d278500d9:63","type":"sequence"}]
 */
class EnterpriseCallCenterMonitoringGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableSupervisorCoaching
     * @Type bool
     * @Group b5e86c5d60603bdb61de308d278500d9:63
     * @var bool|null
     */
    protected $enableSupervisorCoaching = null;

    /**
     * @ElementName bypassEnforcementOfSupervisorAgentRelationship
     * @Type bool
     * @Optional
     * @Group b5e86c5d60603bdb61de308d278500d9:63
     * @var bool|null
     */
    protected $bypassEnforcementOfSupervisorAgentRelationship = null;

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

    /**
     * Getter for bypassEnforcementOfSupervisorAgentRelationship
     *
     * @return bool
     */
    public function getBypassEnforcementOfSupervisorAgentRelationship()
    {
        return $this->bypassEnforcementOfSupervisorAgentRelationship instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bypassEnforcementOfSupervisorAgentRelationship;
    }

    /**
     * Setter for bypassEnforcementOfSupervisorAgentRelationship
     *
     * @param bool $bypassEnforcementOfSupervisorAgentRelationship
     * @return $this
     */
    public function setBypassEnforcementOfSupervisorAgentRelationship($bypassEnforcementOfSupervisorAgentRelationship)
    {
        $this->bypassEnforcementOfSupervisorAgentRelationship = $bypassEnforcementOfSupervisorAgentRelationship;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBypassEnforcementOfSupervisorAgentRelationship()
    {
        $this->bypassEnforcementOfSupervisorAgentRelationship = null;
        return $this;
    }
}

