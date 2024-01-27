<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCallForwardingDestinationMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39182","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCallForwardingDestinationMenuKeys
{
    /**
     * @ElementName finishEnteringNewDestinationNumber
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:39182
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

