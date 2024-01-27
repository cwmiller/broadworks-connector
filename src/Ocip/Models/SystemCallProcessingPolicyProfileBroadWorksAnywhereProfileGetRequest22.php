<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetRequest22
 *
 * Request to get the configuration for a call processing policy profile BroadWorks Anywhere subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetResponse22 or an
 *         ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetRequest22 in AS data mode.
 *
 * @see SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetResponse22
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:23084","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:23084
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

