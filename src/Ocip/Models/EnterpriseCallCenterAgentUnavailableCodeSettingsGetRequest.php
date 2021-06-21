<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest
 *
 * Request the enterprise level data associated with Call Center Agents Unavailable Code Settings.
 *         The response is either an EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse or an
 *         ErrorResponse.
 *         
 *         Replaced by EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4.
 *
 * @see EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse
 * @see ErrorResponse
 * @see EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:2068","type":"sequence"}]
 */
class EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:2068
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

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


}

