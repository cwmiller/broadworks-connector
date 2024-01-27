<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalGetRequest21sp1
 *
 * Request to get a system voice portal instance.
 *         The response is either SystemSystemVoicePortalGetResponse21sp1 or ErrorResponse.
 *         
 *         Replaced by: SystemSystemVoicePortalGetRequest23.
 *
 * @see SystemSystemVoicePortalGetResponse21sp1
 * @see ErrorResponse
 * @see SystemSystemVoicePortalGetRequest23
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:36090","type":"sequence"}]
 */
class SystemSystemVoicePortalGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName systemVoicePortalId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:36090
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

