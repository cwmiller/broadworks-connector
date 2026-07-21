<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileVoiceXMLProfileGetRequest22V2
 *
 * Request to get the configuration for a call processing policy profile VoiceXML subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileVoiceXMLProfileGetResponse22V2 or an
 *         ErrorResponse.
 *         Replaced by: SystemCallProcessingPolicyProfileVoiceXMLProfileGetRequest24
 *
 * @see SystemCallProcessingPolicyProfileVoiceXMLProfileGetResponse22V2
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:28866","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileVoiceXMLProfileGetRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:28866
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

