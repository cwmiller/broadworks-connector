<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallDispositionCodeWithLevel
 *
 * Contains a Call Center Call Disposition Code and its Level
 *
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7734","type":"sequence"}]
 */
class CallDispositionCodeWithLevel
{
    /**
     * @ElementName code
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7734
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $code = null;

    /**
     * @ElementName level
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel
     * @Group 4d65d3449061c568639c8cc1e2492285:7734
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel|null
     */
    protected $level = null;

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
     * Getter for level
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel
     */
    public function getLevel()
    {
        return $this->level instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->level;
    }

    /**
     * Setter for level
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel $level
     * @return $this
     */
    public function setLevel(\CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel $level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLevel()
    {
        $this->level = null;
        return $this;
    }
}

