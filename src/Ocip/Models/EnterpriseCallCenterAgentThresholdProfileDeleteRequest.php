<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterAgentThresholdProfileDeleteRequest
 *
 * Deletes an existing Call Center Agent Threshold Profile in an Enterprise.
 *         The default profile cannot be deleted.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterAgentThresholdProfileDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName profileName
     * @var string|null
     */
    private $profileName = null;

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

    /**
     * Getter for profileName
     *
     * @ElementName profileName
     * @return string|null
     */
    public function getProfileName()
    {
        return $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @ElementName profileName
     * @param string|null $profileName
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }


}

