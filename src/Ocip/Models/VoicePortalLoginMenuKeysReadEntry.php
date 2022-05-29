<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoicePortalLoginMenuKeysReadEntry
 *
 * The voice portal login menu keys.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:3285","type":"sequence"}]
 */
class VoicePortalLoginMenuKeysReadEntry
{

    /**
     * @ElementName accessUsingOtherMailboxId
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3285
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

