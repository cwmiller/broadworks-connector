<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayGreetingMenuKeys
 *
 * @Groups [{"id":"80c5986946137c505e41f6008c7f75a8:718","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayGreetingMenuKeys
{

    /**
     * @ElementName skipBackward
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:718
     * @var string|null
     */
    private $skipBackward = null;

    /**
     * @ElementName pauseOrResume
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:718
     * @var string|null
     */
    private $pauseOrResume = null;

    /**
     * @ElementName skipForward
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:718
     * @var string|null
     */
    private $skipForward = null;

    /**
     * @ElementName jumpToBegin
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:718
     * @var string|null
     */
    private $jumpToBegin = null;

    /**
     * @ElementName jumpToEnd
     * @Type string
     * @Optional
     * @Group 80c5986946137c505e41f6008c7f75a8:718
     * @var string|null
     */
    private $jumpToEnd = null;

    /**
     * Getter for skipBackward
     *
     * @return string
     */
    public function getSkipBackward()
    {
        return $this->skipBackward instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skipBackward;
    }

    /**
     * Setter for skipBackward
     *
     * @param string $skipBackward
     * @return $this
     */
    public function setSkipBackward($skipBackward)
    {
        $this->skipBackward = $skipBackward;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSkipBackward()
    {
        $this->skipBackward = null;
        return $this;
    }

    /**
     * Getter for pauseOrResume
     *
     * @return string
     */
    public function getPauseOrResume()
    {
        return $this->pauseOrResume instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pauseOrResume;
    }

    /**
     * Setter for pauseOrResume
     *
     * @param string $pauseOrResume
     * @return $this
     */
    public function setPauseOrResume($pauseOrResume)
    {
        $this->pauseOrResume = $pauseOrResume;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPauseOrResume()
    {
        $this->pauseOrResume = null;
        return $this;
    }

    /**
     * Getter for skipForward
     *
     * @return string
     */
    public function getSkipForward()
    {
        return $this->skipForward instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skipForward;
    }

    /**
     * Setter for skipForward
     *
     * @param string $skipForward
     * @return $this
     */
    public function setSkipForward($skipForward)
    {
        $this->skipForward = $skipForward;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSkipForward()
    {
        $this->skipForward = null;
        return $this;
    }

    /**
     * Getter for jumpToBegin
     *
     * @return string
     */
    public function getJumpToBegin()
    {
        return $this->jumpToBegin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->jumpToBegin;
    }

    /**
     * Setter for jumpToBegin
     *
     * @param string $jumpToBegin
     * @return $this
     */
    public function setJumpToBegin($jumpToBegin)
    {
        $this->jumpToBegin = $jumpToBegin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetJumpToBegin()
    {
        $this->jumpToBegin = null;
        return $this;
    }

    /**
     * Getter for jumpToEnd
     *
     * @return string
     */
    public function getJumpToEnd()
    {
        return $this->jumpToEnd instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->jumpToEnd;
    }

    /**
     * Setter for jumpToEnd
     *
     * @param string $jumpToEnd
     * @return $this
     */
    public function setJumpToEnd($jumpToEnd)
    {
        $this->jumpToEnd = $jumpToEnd;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetJumpToEnd()
    {
        $this->jumpToEnd = null;
        return $this;
    }


}

