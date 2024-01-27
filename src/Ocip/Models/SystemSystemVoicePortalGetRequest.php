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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:36072","type":"sequence"}]
 */
class SystemSystemVoicePortalGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName systemVoicePortalId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:36072
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

