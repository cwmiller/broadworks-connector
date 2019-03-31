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
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:321","type":"sequence"}]
 */
class ResellerVoiceMessagingGroupGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:321
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $resellerId = null;

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

