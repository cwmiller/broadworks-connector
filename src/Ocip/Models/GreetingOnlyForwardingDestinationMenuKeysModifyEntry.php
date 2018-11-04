<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GreetingOnlyForwardingDestinationMenuKeysModifyEntry
 *
 * The voice portal greeting only forwarding destination menu keys modify entry.
 */
class GreetingOnlyForwardingDestinationMenuKeysModifyEntry
{

    /**
     * @ElementName greetingOnlyForwardingDestination
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $greetingOnlyForwardingDestination = null;

    /**
     * Getter for greetingOnlyForwardingDestination
     *
     * @ElementName greetingOnlyForwardingDestination
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getGreetingOnlyForwardingDestination()
    {
        return $this->greetingOnlyForwardingDestination;
    }

    /**
     * Setter for greetingOnlyForwardingDestination
     *
     * @ElementName greetingOnlyForwardingDestination
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $greetingOnlyForwardingDestination
     * @return $this
     */
    public function setGreetingOnlyForwardingDestination($greetingOnlyForwardingDestination)
    {
        $this->greetingOnlyForwardingDestination = $greetingOnlyForwardingDestination;
        return $this;
    }


}

