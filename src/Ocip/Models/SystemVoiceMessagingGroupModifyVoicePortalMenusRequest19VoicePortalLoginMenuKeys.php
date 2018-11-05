<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalLoginMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalLoginMenuKeys
{

    /**
     * @ElementName accessUsingOtherMailboxId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessUsingOtherMailboxId = null;

    /**
     * Getter for accessUsingOtherMailboxId
     *
     * @ElementName accessUsingOtherMailboxId
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAccessUsingOtherMailboxId()
    {
        return $this->accessUsingOtherMailboxId;
    }

    /**
     * Setter for accessUsingOtherMailboxId
     *
     * @ElementName accessUsingOtherMailboxId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $accessUsingOtherMailboxId
     * @return $this
     */
    public function setAccessUsingOtherMailboxId($accessUsingOtherMailboxId)
    {
        $this->accessUsingOtherMailboxId = $accessUsingOtherMailboxId;
        return $this;
    }


}

