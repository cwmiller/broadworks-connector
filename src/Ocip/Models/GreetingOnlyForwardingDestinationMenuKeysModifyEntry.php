<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GreetingOnlyForwardingDestinationMenuKeysModifyEntry
 *
 * The voice portal greeting only forwarding destination menu keys modify entry.
 *
 * @Groups [{"id":"80c5986946137c505e41f6008c7f75a8:2571","type":"sequence"}]
 */
class GreetingOnlyForwardingDestinationMenuKeysModifyEntry
{

    /**
     * @ElementName greetingOnlyForwardingDestination
     * @Type string
     * @Nillable
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:2571
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $greetingOnlyForwardingDestination = null;

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
    public function setGreetingOnlyForwardingDestination($greetingOnlyForwardingDestination)
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

