<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4
 *
 * Request the enterprise level data associated with Call Center Agents Unavailable
 * Code Settings.
 *         The response is either an
 * EnterpriseCallCenterAgentUnavailableCodeSettingsGetResponse17sp4 or an
 *         ErrorResponse.
 */
class EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }


}

