<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ChangeCallForwardingDestinationMenuKeysReadEntry
 *
 * The voice portal change call forwarding destination menu keys.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:2366","type":"sequence"}]
 */
class ChangeCallForwardingDestinationMenuKeysReadEntry
{

    /**
     * @ElementName finishEnteringNewDestinationNumber
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2366
     * @var string|null
     */
    private $finishEnteringNewDestinationNumber = null;

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

