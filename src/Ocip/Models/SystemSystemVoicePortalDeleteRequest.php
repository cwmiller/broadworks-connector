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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18598","type":"sequence"}]
 */
class SystemSystemVoicePortalDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName systemVoicePortalId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:18598
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $systemVoicePortalId = null;

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

