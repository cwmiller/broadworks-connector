<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileFlexibleSeatingHostProfileGetRequest22
 *
 * Request to get the configuration for a call processing policy profile Flexible Seating Host subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileFlexibleSeatingHostProfileGetResponse22 or an
 *         ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileFlexibleSeatingHostProfileGetRequest22V2
 *
 * @see SystemCallProcessingPolicyProfileFlexibleSeatingHostProfileGetResponse22
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileFlexibleSeatingHostProfileGetRequest22V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:23634","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileFlexibleSeatingHostProfileGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:23634
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

