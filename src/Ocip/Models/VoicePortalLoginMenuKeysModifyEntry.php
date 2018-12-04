<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoicePortalLoginMenuKeysModifyEntry
 *
 * The voice portal voice portal login menu keys modify entry.
 *
 * @Groups [{"id":"1624846b7d87d3ab55e907c443fca9d6:3218","type":"sequence"}]
 */
class VoicePortalLoginMenuKeysModifyEntry
{

    /**
     * @ElementName accessUsingOtherMailboxId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:3218
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $accessUsingOtherMailboxId = null;

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
    public function setAccessUsingOtherMailboxId($accessUsingOtherMailboxId)
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

