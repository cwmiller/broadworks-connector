<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GreetingOnlyForwardingDestinationMenuKeysReadEntry
 *
 * The voice portal greeting only forwarding destination menu keys.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2643","type":"sequence"}]
 */
class GreetingOnlyForwardingDestinationMenuKeysReadEntry
{
    /**
     * @ElementName greetingOnlyForwardingDestination
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2643
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $greetingOnlyForwardingDestination = null;

    /**
     * Getter for greetingOnlyForwardingDestination
     *
     * @return string
     */
    public function getGreetingOnlyForwardingDestination()
    {
        return $this->greetingOnlyForwardingDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetingOnlyForwardingDestination;
    }

    /**
     * Setter for greetingOnlyForwardingDestination
     *
     * @param string $greetingOnlyForwardingDestination
     * @return $this
     */
    public function setGreetingOnlyForwardingDestination($greetingOnlyForwardingDestination)
    {
        $this->greetingOnlyForwardingDestination = $greetingOnlyForwardingDestination;
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

