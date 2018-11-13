<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusRequest19sp1
 *
 * Requests the system voice portal Menus setting.
 *         The response is either
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1 or ErrorResponse.
 *         
 *         Replaced by SystemVoiceMessagingGroupGetVoicePortalMenusRequest20
 *
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1
 * @see ErrorResponse
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusRequest20
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName getDefaultMenuKeys
     * @Type bool
     * @var bool|null
     */
    private $getDefaultMenuKeys = null;

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

