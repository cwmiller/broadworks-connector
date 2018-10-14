<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMusicOnHoldUserGetResponse
 *
 * Response to UserMusicOnHoldUserGetRequest.
 *         Replaced By: UserMusicOnHoldUserGetResponse16
 *
 * @see UserMusicOnHoldUserGetRequest
 * @see UserMusicOnHoldUserGetResponse16
 */
class UserMusicOnHoldUserGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableVideo
     * @var bool|null
     */
    private $enableVideo = null;

    /**
     * @ElementName source
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead|null
     */
    private $source = null;

    /**
     * @ElementName useAlternateSourceForInternalCalls
     * @var bool|null
     */
    private $useAlternateSourceForInternalCalls = null;

    /**
     * @ElementName internalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Setter for source
     *
     * @ElementName source
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead|null $source
     * @return $this
     */
    public function setSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead $source)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead|null
     */
    public function getInternalSource()
    {
        return $this->internalSource;
    }

    /**
     * Setter for internalSource
     *
     * @ElementName internalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead|null $internalSource
     * @return $this
     */
    public function setInternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceRead $internalSource)
    {
        $this->internalSource = $internalSource;
        return $this;
    }


}

