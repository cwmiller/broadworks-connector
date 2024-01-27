<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusRequest21
 *
 * Requests the system voice portal Menus setting.
 *         The response is either SystemVoiceMessagingGroupGetVoicePortalMenusResponse21 or ErrorResponse.
 *
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusResponse21
 * @see ErrorResponse
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:673","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName getDefaultMenuKeys
     * @Type bool
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:673
     * @var bool|null
     */
    protected $getDefaultMenuKeys = null;

    /**
     * Getter for getDefaultMenuKeys
     *
     * @return bool
     */
    public function getGetDefaultMenuKeys()
    {
        return $this->getDefaultMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->getDefaultMenuKeys;
    }

    /**
     * Setter for getDefaultMenuKeys
     *
     * @param bool $getDefaultMenuKeys
     * @return $this
     */
    public function setGetDefaultMenuKeys($getDefaultMenuKeys)
    {
        $this->getDefaultMenuKeys = $getDefaultMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGetDefaultMenuKeys()
    {
        $this->getDefaultMenuKeys = null;
        return $this;
    }
}

