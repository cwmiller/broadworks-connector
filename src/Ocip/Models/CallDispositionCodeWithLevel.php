<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallDispositionCodeWithLevel
 *
 * Contains a Call Center Call Disposition Code and its Level
 *
 * @Groups [{"id":"69c2aeb1186dc97a4f4c36d9609ddb49:6973","type":"sequence"}]
 */
class CallDispositionCodeWithLevel
{

    /**
     * @ElementName code
     * @Type string
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6973
     * @var string|null
     */
    private $code = null;

    /**
     * @ElementName level
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel
     * @Group 69c2aeb1186dc97a4f4c36d9609ddb49:6973
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeLevel|null
     */
    private $level = null;

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

