<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusRequest19
 *
 * Requests the system voice portal Menus setting.
 *         The response is either SystemVoiceMessagingGroupGetVoicePortalMenusResponse19 or ErrorResponse.
 *         
 *         Replaced by: SystemVoiceMessagingGroupGetVoicePortalMenusRequest19sp1
 *
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusResponse19
 * @see ErrorResponse
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusRequest19sp1
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:29260","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName getDefaultMenuKeys
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:29260
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

