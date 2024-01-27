<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalLoginMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39819","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalLoginMenuKeys
{
    /**
     * @ElementName accessUsingOtherMailboxId
     * @Type string
     * @Nillable
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39819
     * @MinLength 1
     * @MaxLength 3
     * @Pattern ([0-9]|\*|#){0,3}
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $accessUsingOtherMailboxId = null;

    /**
     * Getter for accessUsingOtherMailboxId
     *
     * @return string|null
     */
    public function getAccessUsingOtherMailboxId()
    {
        return $this->accessUsingOtherMailboxId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessUsingOtherMailboxId;
    }

    /**
     * Setter for accessUsingOtherMailboxId
     *
     * @param string|null $accessUsingOtherMailboxId
     * @return $this
     */
    public function setAccessUsingOtherMailboxId($accessUsingOtherMailboxId = null)
    {
        if ($accessUsingOtherMailboxId === null) {
            $this->accessUsingOtherMailboxId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->accessUsingOtherMailboxId = $accessUsingOtherMailboxId;
        }
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

