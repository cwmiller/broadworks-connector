<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallDispositionCodeWithLevel
 *
 * Contains a Call Center Call Disposition Code and its Level
 */
class CallDispositionCodeWithLevel
{

    /**
     * @ElementName code
     * @var string|null
     */
    private $code = null;

    /**
     * @ElementName level
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel|null
     */
    private $level = null;

    /**
     * Getter for code
     *
     * @ElementName code
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Setter for code
     *
     * @ElementName code
     * @param string|null $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Getter for level
     *
     * @ElementName level
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel|null
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Setter for level
     *
     * @ElementName level
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel|null $level
     * @return $this
     */
    public function setLevel(\CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel $level)
    {
        $this->level = $level;
        return $this;
    }


}

