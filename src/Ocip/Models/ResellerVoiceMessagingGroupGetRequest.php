<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerVoiceMessagingGroupGetRequest
 *
 * Request the reseller level data associated with Voice Messaging.
 *         The response is either a ResellerVoiceMessagingGroupGetResponse or an
 *         ErrorResponse.
 *
 * @see ResellerVoiceMessagingGroupGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:321","type":"sequence"}]
 */
class ResellerVoiceMessagingGroupGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:321
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }
}

