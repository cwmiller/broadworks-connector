<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18VoicePortalLoginMenuKeys
 *
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:29940","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18VoicePortalLoginMenuKeys
{

    /**
     * @ElementName accessUsingOtherMailboxId
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:29940
     * @var string|null
     */
    private $accessUsingOtherMailboxId = null;

    /**
     * Getter for accessUsingOtherMailboxId
     *
     * @return string
     */
    public function getAccessUsingOtherMailboxId()
    {
        return $this->accessUsingOtherMailboxId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessUsingOtherMailboxId;
    }

    /**
     * Setter for accessUsingOtherMailboxId
     *
     * @param string $accessUsingOtherMailboxId
     * @return $this
     */
    public function setAccessUsingOtherMailboxId($accessUsingOtherMailboxId)
    {
        $this->accessUsingOtherMailboxId = $accessUsingOtherMailboxId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessUsingOtherMailboxId()
    {
        $this->accessUsingOtherMailboxId = null;
        return $this;
    }


}

