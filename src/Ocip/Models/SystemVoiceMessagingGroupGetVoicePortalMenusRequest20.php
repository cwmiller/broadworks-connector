<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusRequest20
 *
 * Requests the system voice portal Menus setting.
 *         The response is either SystemVoiceMessagingGroupGetVoicePortalMenusResponse20 or ErrorResponse.
 *
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusResponse20
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:37100","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName getDefaultMenuKeys
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:37100
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

