<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalGetRequest23
 *
 * Request to get a system voice portal instance.
 *         The response is either SystemSystemVoicePortalGetResponse23 or ErrorResponse.
 *
 * @see SystemSystemVoicePortalGetResponse23
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18643","type":"sequence"}]
 */
class SystemSystemVoicePortalGetRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName systemVoicePortalId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:18643
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

