<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterMonitoringModifyRequest
 *
 * Modify the enterprise level data associated with Call Center Monitoring
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5e86c5d60603bdb61de308d278500d9:80","type":"sequence"}]
 */
class EnterpriseCallCenterMonitoringModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b5e86c5d60603bdb61de308d278500d9:80
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName enableSupervisorCoaching
     * @Type bool
     * @Optional
     * @Group b5e86c5d60603bdb61de308d278500d9:80
     * @var bool|null
     */
    protected $enableSupervisorCoaching = null;

    /**
     * @ElementName bypassEnforcementOfSupervisorAgentRelationship
     * @Type bool
     * @Optional
     * @Group b5e86c5d60603bdb61de308d278500d9:80
     * @var bool|null
     */
    protected $bypassEnforcementOfSupervisorAgentRelationship = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

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

