<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallDispositionCodeActivation
 *
 * Contains a Call Center Call Disposition Code and its active state
 *
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6961","type":"sequence"}]
 */
class CallDispositionCodeActivation
{

    /**
     * @ElementName code
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6961
     * @var string|null
     */
    private $code = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6961
     * @var bool|null
     */
    private $isActive = null;

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

