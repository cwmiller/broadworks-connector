<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoicePortalLoginMenuKeysReadEntry
 *
 * The voice portal login menu keys.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:3291","type":"sequence"}]
 */
class VoicePortalLoginMenuKeysReadEntry
{
    /**
     * @ElementName accessUsingOtherMailboxId
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:3291
     * @MinLength 1
     * @MaxLength 3
     * @Pattern ([0-9]|\*|#){0,3}
     * @var string|null
     */
    protected $accessUsingOtherMailboxId = null;

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

