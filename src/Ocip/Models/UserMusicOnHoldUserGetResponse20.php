<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMusicOnHoldUserGetResponse20
 *
 * Response to UserMusicOnHoldUserGetRequest20.
 */
class UserMusicOnHoldUserGetResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableVideo
     * @var bool|null
     */
    private $enableVideo = null;

    /**
     * @ElementName source
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead20|null
     */
    private $source = null;

    /**
     * @ElementName useAlternateSourceForInternalCalls
     * @var bool|null
     */
    private $useAlternateSourceForInternalCalls = null;

    /**
     * @ElementName internalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead20|null
     */
    private $internalSource = null;

    /**
     * Getter for enableVideo
     *
     * @ElementName enableVideo
     * @return bool|null
     */
    public function getEnableVideo()
    {
        return $this->enableVideo;
    }

    /**
     * Setter for enableVideo
     *
     * @ElementName enableVideo
     * @param bool|null $enableVideo
     * @return $this
     */
    public function setEnableVideo($enableVideo)
    {
        $this->enableVideo = $enableVideo;
        return $this;
    }

    /**
     * Getter for source
     *
     * @ElementName source
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead20|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Setter for source
     *
     * @ElementName source
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead20|null $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Getter for useAlternateSourceForInternalCalls
     *
     * @ElementName useAlternateSourceForInternalCalls
     * @return bool|null
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return $this->useAlternateSourceForInternalCalls;
    }

    /**
     * Setter for useAlternateSourceForInternalCalls
     *
     * @ElementName useAlternateSourceForInternalCalls
     * @param bool|null $useAlternateSourceForInternalCalls
     * @return $this
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls)
    {
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * Getter for internalSource
     *
     * @ElementName internalSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead20|null
     */
    public function getInternalSource()
    {
        return $this->internalSource;
    }

    /**
     * Setter for internalSource
     *
     * @ElementName internalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead20|null $internalSource
     * @return $this
     */
    public function setInternalSource($internalSource)
    {
        $this->internalSource = $internalSource;
        return $this;
    }


}

