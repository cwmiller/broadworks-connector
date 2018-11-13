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
     * @Type string
     * @var string|null
     */
    private $executiveUserId = null;

    /**
     * @ElementName optIn
     * @Type bool
     * @var bool|null
     */
    private $optIn = null;

    /**
     * Getter for executiveUserId
     *
     * @return string
     */
    public function getExecutiveUserId()
    {
        return $this->executiveUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->executiveUserId;
    }

    /**
     * Setter for executiveUserId
     *
     * @param string $executiveUserId
     * @return $this
     */
    public function setExecutiveUserId($executiveUserId)
    {
        $this->executiveUserId = $executiveUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExecutiveUserId()
    {
        $this->executiveUserId = null;
        return $this;
    }

    /**
     * Getter for optIn
     *
     * @return bool
     */
    public function getOptIn()
    {
        return $this->optIn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->optIn;
    }

    /**
     * Setter for optIn
     *
     * @param bool $optIn
     * @return $this
     */
    public function setOptIn($optIn)
    {
        $this->optIn = $optIn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOptIn()
    {
        $this->optIn = null;
        return $this;
    }


}

