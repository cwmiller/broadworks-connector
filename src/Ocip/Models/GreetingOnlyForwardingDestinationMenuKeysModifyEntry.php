<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GreetingOnlyForwardingDestinationMenuKeysModifyEntry
 *
 * The voice portal greeting only forwarding destination menu keys modify entry.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2632","type":"sequence"}]
 */
class GreetingOnlyForwardingDestinationMenuKeysModifyEntry
{
    /**
     * @ElementName greetingOnlyForwardingDestination
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2632
     * @Length 1
     * @Pattern \*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $greetingOnlyForwardingDestination = null;

    /**
     * Getter for greetingOnlyForwardingDestination
     *
     * @return string|null
     */
    public function getGreetingOnlyForwardingDestination()
    {
        return $this->greetingOnlyForwardingDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetingOnlyForwardingDestination;
    }

    /**
     * Setter for greetingOnlyForwardingDestination
     *
     * @param string|null $greetingOnlyForwardingDestination
     * @return $this
     */
    public function setGreetingOnlyForwardingDestination($greetingOnlyForwardingDestination = null)
    {
        if ($greetingOnlyForwardingDestination === null) {
            $this->greetingOnlyForwardingDestination = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->greetingOnlyForwardingDestination = $greetingOnlyForwardingDestination;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGreetingOnlyForwardingDestination()
    {
        $this->greetingOnlyForwardingDestination = null;
        return $this;
    }
}

