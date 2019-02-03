<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileInstantGroupCallProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Instant Group Call subscriber type
 *                 profile.
 *                 The response is either a SystemCallProcessingPolicyProfileInstantGroupCallProfileGetResponse22 or an
 *                 ErrorResponse.
 *
 *                 Replaced by: SystemCallProcessingPolicyProfileInstantGroupCallProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileInstantGroupCallProfileGetResponse22
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileInstantGroupCallProfileGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:38032","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileInstantGroupCallProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38032
     * @var string|null
     */
    private $callProcessingPolicyProfileName = null;

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

