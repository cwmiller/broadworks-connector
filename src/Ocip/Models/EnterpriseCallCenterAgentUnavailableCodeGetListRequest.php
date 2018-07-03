<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentUnavailableCodeGetListRequest
 *
 * Get the list of Call Center Agent Unavailable Codes.
 *         The response is either
 * EnterpriseCallCenterAgentUnavailableCodeGetListResponse or ErrorResponse.
 *
 * @see EnterpriseCallCenterAgentUnavailableCodeGetListResponse
 * @see ErrorResponse
 */
class EnterpriseCallCenterAgentUnavailableCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

