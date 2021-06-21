<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileCallCenterProfileGetRequest22
 *
 * Request to get the configuration for a call processing policy profile Call Center subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileCallCenterProfileGetRequestResponse22 or an
 *         ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileCallCenterProfileGetRequest22V2 in AS data mode.
 *
 * @see SystemCallProcessingPolicyProfileCallCenterProfileGetRequestResponse22
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileCallCenterProfileGetRequest22V2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:22445","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileCallCenterProfileGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:22445
     * @MinLength 1
     * @MaxLength 40
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

