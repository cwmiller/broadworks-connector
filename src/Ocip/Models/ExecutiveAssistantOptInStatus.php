<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveAssistantOptInStatus
 *
 * Executive assistant Opt-in status with executive.
 */
class ExecutiveAssistantOptInStatus
{

    /**
     * @ElementName executiveUserId
     * @var string|null
     */
    private $executiveUserId = null;

    /**
     * @ElementName optIn
     * @var bool|null
     */
    private $optIn = null;

    /**
     * Getter for executiveUserId
     *
     * @ElementName executiveUserId
     * @return string|null
     */
    public function getExecutiveUserId()
    {
        return $this->executiveUserId;
    }

    /**
     * Setter for executiveUserId
     *
     * @ElementName executiveUserId
     * @param string|null $executiveUserId
     * @return $this
     */
    public function setExecutiveUserId($executiveUserId)
    {
        $this->executiveUserId = $executiveUserId;
        return $this;
    }

    /**
     * Getter for optIn
     *
     * @ElementName optIn
     * @return bool|null
     */
    public function getOptIn()
    {
        return $this->optIn;
    }

    /**
     * Setter for optIn
     *
     * @ElementName optIn
     * @param bool|null $optIn
     * @return $this
     */
    public function setOptIn($optIn)
    {
        $this->optIn = $optIn;
        return $this;
    }


}

