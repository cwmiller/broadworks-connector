<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileRoutePointProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Route Point subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileRoutePointProfileGetResponse or an
 *         ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileRoutePointProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileRoutePointProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileRoutePointProfileGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:23487","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileRoutePointProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23487
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

