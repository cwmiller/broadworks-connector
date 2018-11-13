<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalDeleteRequest
 *
 * Request to delete a system voice portal instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSystemVoicePortalDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemVoicePortalId
     * @Type string
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

