<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetAssignedNCOSListRequest
 *
 * Request a list of NCOSs that have a given CallP Policy Profile assigned.
 *         The response is either a
 *         SystemCallProcessingPolicyProfileGetAssignedNCOSListResponse or
 *         ErrorResponse.
 */
class SystemCallProcessingPolicyProfileGetAssignedNCOSListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName profileName
     * @var string|null
     */
    private $profileName = null;

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

