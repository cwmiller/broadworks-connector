<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallDispositionCodeActivation
 *
 * Contains a Call Center Call Disposition Code and its active state
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7722","type":"sequence"}]
 */
class CallDispositionCodeActivation
{
    /**
     * @ElementName code
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7722
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $code = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 4d65d3449061c568639c8cc1e2492285:7722
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

