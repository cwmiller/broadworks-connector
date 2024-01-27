<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetAssignedNCOSListRequest
 *
 * Request a list of NCOSs that have a given CallP Policy Profile assigned.
 *         The response is either a SystemCallProcessingPolicyProfileGetAssignedNCOSListResponse or ErrorResponse.
 *
 * @see SystemCallProcessingPolicyProfileGetAssignedNCOSListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:3993","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileGetAssignedNCOSListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName profileName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:3993
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $profileName = null;

    /**
     * Getter for profileName
     *
     * @return string
     */
    public function getProfileName()
    {
        return $this->profileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @param string $profileName
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileName()
    {
        $this->profileName = null;
        return $this;
    }
}

