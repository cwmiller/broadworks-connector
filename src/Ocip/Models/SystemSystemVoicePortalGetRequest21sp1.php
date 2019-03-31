<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemVoicePortalGetRequest21sp1
 *
 * Request to get a system voice portal instance.
 *         The response is either SystemSystemVoicePortalGetResponse21sp1 or ErrorResponse.
 *
 * @see SystemSystemVoicePortalGetResponse21sp1
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17432","type":"sequence"}]
 */
class SystemSystemVoicePortalGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName systemVoicePortalId
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17432
     * @MinLength 1
     * @MaxLength 161
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

