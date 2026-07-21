<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ProfileAndServiceMusicOnHoldInfoRI
 *
 * This is the configuration parameters for Music On Hold service
 *
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:4612","type":"sequence"}]
 */
class ProfileAndServiceMusicOnHoldInfoRI
{
    /**
     * @ElementName enableVideo
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4612
     * @var bool|null
     */
    protected $enableVideo = null;

    /**
     * @ElementName source
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXS
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4612
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXS|null
     */
    protected $source = null;

    /**
     * @ElementName useAlternateSourceForInternalCalls
     * @Type bool
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4612
     * @var bool|null
     */
    protected $useAlternateSourceForInternalCalls = null;

    /**
     * @ElementName internalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXS
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:4612
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXS|null
     */
    protected $internalSource = null;

    /**
     * Getter for enableVideo
     *
     * @return bool
     */
    public function getEnableVideo()
    {
        return $this->enableVideo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableVideo;
    }

    /**
     * Setter for enableVideo
     *
     * @param bool $enableVideo
     * @return $this
     */
    public function setEnableVideo($enableVideo)
    {
        $this->enableVideo = $enableVideo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableVideo()
    {
        $this->enableVideo = null;
        return $this;
    }

    /**
     * Getter for source
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXS
     */
    public function getSource()
    {
        return $this->source instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->source;
    }

    /**
     * Setter for source
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXS $source
     * @return $this
     */
    public function setSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXS $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSource()
    {
        $this->source = null;
        return $this;
    }

    /**
     * Getter for useAlternateSourceForInternalCalls
     *
     * @return bool
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return $this->useAlternateSourceForInternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useAlternateSourceForInternalCalls;
    }

    /**
     * Setter for useAlternateSourceForInternalCalls
     *
     * @param bool $useAlternateSourceForInternalCalls
     * @return $this
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls)
    {
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseAlternateSourceForInternalCalls()
    {
        $this->useAlternateSourceForInternalCalls = null;
        return $this;
    }

    /**
     * Getter for internalSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXS
     */
    public function getInternalSource()
    {
        return $this->internalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internalSource;
    }

    /**
     * Setter for internalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXS $internalSource
     * @return $this
     */
    public function setInternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceReadXS $internalSource)
    {
        $this->internalSource = $internalSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternalSource()
    {
        $this->internalSource = null;
        return $this;
    }
}

