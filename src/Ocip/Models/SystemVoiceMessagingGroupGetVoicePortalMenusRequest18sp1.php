<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusRequest18sp1
 *
 * Requests the system voice portal Menus setting.
 *         The response is either SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1 or ErrorResponse.
 *         
 *         Replaced by SystemVoiceMessagingGroupGetVoicePortalMenusRequest19sp1
 *
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1
 * @see ErrorResponse
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusRequest19sp1
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:26141","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusRequest18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName getDefaultMenuKeys
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26141
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

