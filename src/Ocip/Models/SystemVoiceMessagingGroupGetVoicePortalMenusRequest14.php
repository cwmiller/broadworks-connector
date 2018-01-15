<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusRequest14
 *
 * Requests the system voice portal Menus setting.
 *         The response is either
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 or ErrorResponse.
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName getDefaultMenuKeys
     * @var bool|null
     */
    private $getDefaultMenuKeys = null;

    /**
     * Getter for getDefaultMenuKeys
     *
     * @ElementName getDefaultMenuKeys
     * @return bool|null
     */
    public function getGetDefaultMenuKeys()
    {
        return $this->getDefaultMenuKeys;
    }

    /**
     * Setter for getDefaultMenuKeys
     *
     * @ElementName getDefaultMenuKeys
     * @param bool|null $getDefaultMenuKeys
     * @return $this
     */
    public function setGetDefaultMenuKeys($getDefaultMenuKeys)
    {
        $this->getDefaultMenuKeys = $getDefaultMenuKeys;
        return $this;
    }


}

