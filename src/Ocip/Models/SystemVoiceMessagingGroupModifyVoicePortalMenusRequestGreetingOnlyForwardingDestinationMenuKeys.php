<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestGreetingOnlyForwardingDestinationMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39865","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestGreetingOnlyForwardingDestinationMenuKeys
{
    /**
     * @ElementName greetingOnlyForwardingDestination
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39865
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

