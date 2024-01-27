<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileCallCenterProfileGetRequest22
 *
 * Request to get the configuration for a call processing policy profile Call Center subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileCallCenterProfileGetResponse22 or an
 *         ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileCallCenterProfileGetRequest22V2 in AS data mode.
 *
 * @see SystemCallProcessingPolicyProfileCallCenterProfileGetResponse22
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileCallCenterProfileGetRequest22V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:23215","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileCallCenterProfileGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:23215
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

