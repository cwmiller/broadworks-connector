<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoicePortalLoginMenuKeysModifyEntry
 *
 * The voice portal voice portal login menu keys modify entry.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:3280","type":"sequence"}]
 */
class VoicePortalLoginMenuKeysModifyEntry
{
    /**
     * @ElementName accessUsingOtherMailboxId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:3280
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

