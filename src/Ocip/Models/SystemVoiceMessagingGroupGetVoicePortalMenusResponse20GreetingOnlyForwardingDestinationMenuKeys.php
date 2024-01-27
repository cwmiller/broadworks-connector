<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingOnlyForwardingDestinationMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39415","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingOnlyForwardingDestinationMenuKeys
{
    /**
     * @ElementName greetingOnlyForwardingDestination
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:39415
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

