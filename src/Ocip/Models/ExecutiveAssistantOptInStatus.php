<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExecutiveAssistantOptInStatus
 *
 * Executive assistant Opt-in status with executive.
 *
 * @Groups [{"id":"d531efc7ebfdf83cc344962728505dd5:104","type":"sequence"}]
 */
class ExecutiveAssistantOptInStatus
{
    /**
     * @ElementName executiveUserId
     * @Type string
     * @Group d531efc7ebfdf83cc344962728505dd5:104
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $executiveUserId = null;

    /**
     * @ElementName optIn
     * @Type bool
     * @Group d531efc7ebfdf83cc344962728505dd5:104
     * @var bool|null
     */
    protected $optIn = null;

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

