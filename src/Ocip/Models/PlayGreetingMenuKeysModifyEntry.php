<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PlayGreetingMenuKeysModifyEntry
 *
 * The voice portal play greeting menu keys modify entry.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:2836","type":"sequence"}]
 */
class PlayGreetingMenuKeysModifyEntry
{

    /**
     * @ElementName skipBackward
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2836
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $skipBackward = null;

    /**
     * @ElementName pauseOrResume
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2836
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $pauseOrResume = null;

    /**
     * @ElementName skipForward
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2836
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $skipForward = null;

    /**
     * @ElementName jumpToBegin
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2836
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $jumpToBegin = null;

    /**
     * @ElementName jumpToEnd
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2836
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $jumpToEnd = null;

    /**
     * Getter for skipBackward
     *
     * @return string|null
     */
    public function getSkipBackward()
    {
        return $this->skipBackward instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skipBackward;
    }

    /**
     * Setter for skipBackward
     *
     * @param string|null $skipBackward
     * @return $this
     */
    public function setSkipBackward($skipBackward = null)
    {
        if ($skipBackward === null) {
            $this->skipBackward = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->skipBackward = $skipBackward;
        }
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
     * @return string|null
     */
    public function getPauseOrResume()
    {
        return $this->pauseOrResume instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pauseOrResume;
    }

    /**
     * Setter for pauseOrResume
     *
     * @param string|null $pauseOrResume
     * @return $this
     */
    public function setPauseOrResume($pauseOrResume = null)
    {
        if ($pauseOrResume === null) {
            $this->pauseOrResume = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->pauseOrResume = $pauseOrResume;
        }
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
     * @return string|null
     */
    public function getSkipForward()
    {
        return $this->skipForward instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skipForward;
    }

    /**
     * Setter for skipForward
     *
     * @param string|null $skipForward
     * @return $this
     */
    public function setSkipForward($skipForward = null)
    {
        if ($skipForward === null) {
            $this->skipForward = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->skipForward = $skipForward;
        }
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
     * @return string|null
     */
    public function getJumpToBegin()
    {
        return $this->jumpToBegin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->jumpToBegin;
    }

    /**
     * Setter for jumpToBegin
     *
     * @param string|null $jumpToBegin
     * @return $this
     */
    public function setJumpToBegin($jumpToBegin = null)
    {
        if ($jumpToBegin === null) {
            $this->jumpToBegin = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->jumpToBegin = $jumpToBegin;
        }
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
     * @return string|null
     */
    public function getJumpToEnd()
    {
        return $this->jumpToEnd instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->jumpToEnd;
    }

    /**
     * Setter for jumpToEnd
     *
     * @param string|null $jumpToEnd
     * @return $this
     */
    public function setJumpToEnd($jumpToEnd = null)
    {
        if ($jumpToEnd === null) {
            $this->jumpToEnd = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->jumpToEnd = $jumpToEnd;
        }
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

