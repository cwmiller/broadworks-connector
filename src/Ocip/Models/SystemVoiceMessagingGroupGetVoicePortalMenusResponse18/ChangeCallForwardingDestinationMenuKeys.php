<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse18;

/**
 * ChangeCallForwardingDestinationMenuKeys
 */
class ChangeCallForwardingDestinationMenuKeys
{

    /**
     * @ElementName finishEnteringNewDestinationNumber
     * @var string|null
     */
    private $finishEnteringNewDestinationNumber = null;

    /**
     * Getter for finishEnteringNewDestinationNumber
     *
     * @ElementName finishEnteringNewDestinationNumber
     * @return string|null
     */
    public function getFinishEnteringNewDestinationNumber()
    {
        return $this->finishEnteringNewDestinationNumber;
    }

    /**
     * Setter for finishEnteringNewDestinationNumber
     *
     * @ElementName finishEnteringNewDestinationNumber
     * @param string|null $finishEnteringNewDestinationNumber
     * @return $this
     */
    public function setFinishEnteringNewDestinationNumber($finishEnteringNewDestinationNumber)
    {
        $this->finishEnteringNewDestinationNumber = $finishEnteringNewDestinationNumber;
        return $this;
    }


}

