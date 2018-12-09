<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalGetRequest
 *
 * Request to get a system voice portal instance.
 *         The response is either SystemSystemVoicePortalGetResponse or ErrorResponse.
 *         
 *         Replaced by: SystemSystemVoicePortalGetRequest21sp1.
 *
 * @see SystemSystemVoicePortalGetResponse
 * @see ErrorResponse
 * @see SystemSystemVoicePortalGetRequest21sp1
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:28545","type":"sequence"}]
 */
class SystemSystemVoicePortalGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemVoicePortalId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:28545
     * @var string|null
     */
    private $systemVoicePortalId = null;

    /**
     * Getter for systemVoicePortalId
     *
     * @return string
     */
    public function getSystemVoicePortalId()
    {
        return $this->systemVoicePortalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemVoicePortalId;
    }

    /**
     * Setter for systemVoicePortalId
     *
     * @param string $systemVoicePortalId
     * @return $this
     */
    public function setSystemVoicePortalId($systemVoicePortalId)
    {
        $this->systemVoicePortalId = $systemVoicePortalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemVoicePortalId()
    {
        $this->systemVoicePortalId = null;
        return $this;
    }


}

