<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalGetRequest21sp1
 *
 * Request to get a system voice portal instance.
 *         The response is either SystemSystemVoicePortalGetResponse21sp1 or
 * ErrorResponse.
 *
 * @see SystemSystemVoicePortalGetResponse21sp1
 * @see ErrorResponse
 */
class SystemSystemVoicePortalGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemVoicePortalId
     * @var string|null
     */
    private $systemVoicePortalId = null;

    /**
     * Getter for systemVoicePortalId
     *
     * @ElementName systemVoicePortalId
     * @return string|null
     */
    public function getSystemVoicePortalId()
    {
        return $this->systemVoicePortalId;
    }

    /**
     * Setter for systemVoicePortalId
     *
     * @ElementName systemVoicePortalId
     * @param string|null $systemVoicePortalId
     * @return $this
     */
    public function setSystemVoicePortalId($systemVoicePortalId)
    {
        $this->systemVoicePortalId = $systemVoicePortalId;
        return $this;
    }


}

