<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingOnlyForwardingDestinationMenuKeys
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:1627","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingOnlyForwardingDestinationMenuKeys
{
    /**
     * @ElementName greetingOnlyForwardingDestination
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1627
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

