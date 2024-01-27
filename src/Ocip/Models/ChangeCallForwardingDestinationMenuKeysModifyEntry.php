<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ChangeCallForwardingDestinationMenuKeysModifyEntry
 *
 * The voice portal change call forwarding destination menu keys modify entry.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2362","type":"sequence"}]
 */
class ChangeCallForwardingDestinationMenuKeysModifyEntry
{
    /**
     * @ElementName finishEnteringNewDestinationNumber
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2362
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $finishEnteringNewDestinationNumber = null;

    /**
     * Getter for finishEnteringNewDestinationNumber
     *
     * @return string
     */
    public function getFinishEnteringNewDestinationNumber()
    {
        return $this->finishEnteringNewDestinationNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->finishEnteringNewDestinationNumber;
    }

    /**
     * Setter for finishEnteringNewDestinationNumber
     *
     * @param string $finishEnteringNewDestinationNumber
     * @return $this
     */
    public function setFinishEnteringNewDestinationNumber($finishEnteringNewDestinationNumber)
    {
        $this->finishEnteringNewDestinationNumber = $finishEnteringNewDestinationNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFinishEnteringNewDestinationNumber()
    {
        $this->finishEnteringNewDestinationNumber = null;
        return $this;
    }
}

