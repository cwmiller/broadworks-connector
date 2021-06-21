<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentThresholdProfileGetListRequest
 *
 * Get the list of Call Center Agent Threshold Profiles in the Enterprise.
 *         The response is either EnterpriseCallCenterAgentThresholdProfileGetListResponse or ErrorResponse.
 *
 * @see EnterpriseCallCenterAgentThresholdProfileGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:552","type":"sequence"}]
 */
class EnterpriseCallCenterAgentThresholdProfileGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:552
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

