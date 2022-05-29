<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentUnavailableCodeStateModify
 *
 * Contains a Call Center Agent Unavailable Code and its active state
 *
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7355","type":"sequence"}]
 */
class CallCenterAgentUnavailableCodeStateModify
{

    /**
     * @ElementName code
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:7355
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $code = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:7355
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * Getter for code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }


}

