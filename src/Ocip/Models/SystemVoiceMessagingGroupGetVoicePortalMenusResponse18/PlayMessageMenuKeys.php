<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse18;

/**
 * PlayMessageMenuKeys
 */
class PlayMessageMenuKeys
{

    /**
     * @ElementName skipBackward
     * @var string|null
     */
    private $skipBackward = null;

    /**
     * @ElementName pauseOrResume
     * @var string|null
     */
    private $pauseOrResume = null;

    /**
     * @ElementName skipForward
     * @var string|null
     */
    private $skipForward = null;

    /**
     * @ElementName jumpToBegin
     * @var string|null
     */
    private $jumpToBegin = null;

    /**
     * @ElementName jumpToEnd
     * @var string|null
     */
    private $jumpToEnd = null;

    /**
     * Getter for skipBackward
     *
     * @ElementName skipBackward
     * @return string|null
     */
    public function getSkipBackward()
    {
        return $this->skipBackward;
    }

    /**
     * Setter for skipBackward
     *
     * @ElementName skipBackward
     * @param string|null $skipBackward
     * @return $this
     */
    public function setSkipBackward($skipBackward)
    {
        $this->skipBackward = $skipBackward;
        return $this;
    }

    /**
     * Getter for pauseOrResume
     *
     * @ElementName pauseOrResume
     * @return string|null
     */
    public function getPauseOrResume()
    {
        return $this->pauseOrResume;
    }

    /**
     * Setter for pauseOrResume
     *
     * @ElementName pauseOrResume
     * @param string|null $pauseOrResume
     * @return $this
     */
    public function setPauseOrResume($pauseOrResume)
    {
        $this->pauseOrResume = $pauseOrResume;
        return $this;
    }

    /**
     * Getter for skipForward
     *
     * @ElementName skipForward
     * @return string|null
     */
    public function getSkipForward()
    {
        return $this->skipForward;
    }

    /**
     * Setter for skipForward
     *
     * @ElementName skipForward
     * @param string|null $skipForward
     * @return $this
     */
    public function setSkipForward($skipForward)
    {
        $this->skipForward = $skipForward;
        return $this;
    }

    /**
     * Getter for jumpToBegin
     *
     * @ElementName jumpToBegin
     * @return string|null
     */
    public function getJumpToBegin()
    {
        return $this->jumpToBegin;
    }

    /**
     * Setter for jumpToBegin
     *
     * @ElementName jumpToBegin
     * @param string|null $jumpToBegin
     * @return $this
     */
    public function setJumpToBegin($jumpToBegin)
    {
        $this->jumpToBegin = $jumpToBegin;
        return $this;
    }

    /**
     * Getter for jumpToEnd
     *
     * @ElementName jumpToEnd
     * @return string|null
     */
    public function getJumpToEnd()
    {
        return $this->jumpToEnd;
    }

    /**
     * Setter for jumpToEnd
     *
     * @ElementName jumpToEnd
     * @param string|null $jumpToEnd
     * @return $this
     */
    public function setJumpToEnd($jumpToEnd)
    {
        $this->jumpToEnd = $jumpToEnd;
        return $this;
    }


}

