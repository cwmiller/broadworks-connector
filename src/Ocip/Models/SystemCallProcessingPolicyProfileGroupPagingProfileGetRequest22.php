<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGroupPagingProfileGetRequest22
 *
 * Request to get the configuration for a call processing policy profile Group Paging subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileGroupPagingProfileGetResponse22 or an
 *         ErrorResponse.
 *
 * @see SystemCallProcessingPolicyProfileGroupPagingProfileGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:4093","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileGroupPagingProfileGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:4093
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $callProcessingPolicyProfileName = null;

    /**
     * Getter for callProcessingPolicyProfileName
     *
     * @return string
     */
    public function getCallProcessingPolicyProfileName()
    {
        return $this->callProcessingPolicyProfileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callProcessingPolicyProfileName;
    }

    /**
     * Setter for callProcessingPolicyProfileName
     *
     * @param string $callProcessingPolicyProfileName
     * @return $this
     */
    public function setCallProcessingPolicyProfileName($callProcessingPolicyProfileName)
    {
        $this->callProcessingPolicyProfileName = $callProcessingPolicyProfileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallProcessingPolicyProfileName()
    {
        $this->callProcessingPolicyProfileName = null;
        return $this;
    }
}

