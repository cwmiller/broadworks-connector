<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementRepositoryGetSettingsResponse
 *
 * Response to UserAnnouncementRepositoryGetSettingsRequest.
 *         The response contains the current total file size (KB) for the user across
 *         all media types and the maximum total file size (MB) allowed for the user.
 *         It also indicates the maximum file size for individual audio and video files.
 *
 * @see UserAnnouncementRepositoryGetSettingsRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:805","type":"sequence"}]
 */
class UserAnnouncementRepositoryGetSettingsResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName totalFileSize
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:805
     * @var int|null
     */
    protected $totalFileSize = null;

    /**
     * @ElementName maxAudioFileSize
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:805
     * @var int|null
     */
    protected $maxAudioFileSize = null;

    /**
     * @ElementName maxVideoFileSize
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:805
     * @var int|null
     */
    protected $maxVideoFileSize = null;

    /**
     * @ElementName maxFileSize
     * @Type int
     * @Group fb73488c2ef4ac4400ab213b637d79a9:805
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxFileSize = null;

    /**
     * Getter for totalFileSize
     *
     * @return int
     */
    public function getTotalFileSize()
    {
        return $this->totalFileSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalFileSize;
    }

    /**
     * Setter for totalFileSize
     *
     * @param int $totalFileSize
     * @return $this
     */
    public function setTotalFileSize($totalFileSize)
    {
        $this->totalFileSize = $totalFileSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalFileSize()
    {
        $this->totalFileSize = null;
        return $this;
    }

    /**
     * Getter for maxAudioFileSize
     *
     * @return int
     */
    public function getMaxAudioFileSize()
    {
        return $this->maxAudioFileSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxAudioFileSize;
    }

    /**
     * Setter for maxAudioFileSize
     *
     * @param int $maxAudioFileSize
     * @return $this
     */
    public function setMaxAudioFileSize($maxAudioFileSize)
    {
        $this->maxAudioFileSize = $maxAudioFileSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxAudioFileSize()
    {
        $this->maxAudioFileSize = null;
        return $this;
    }

    /**
     * Getter for maxVideoFileSize
     *
     * @return int
     */
    public function getMaxVideoFileSize()
    {
        return $this->maxVideoFileSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxVideoFileSize;
    }

    /**
     * Setter for maxVideoFileSize
     *
     * @param int $maxVideoFileSize
     * @return $this
     */
    public function setMaxVideoFileSize($maxVideoFileSize)
    {
        $this->maxVideoFileSize = $maxVideoFileSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxVideoFileSize()
    {
        $this->maxVideoFileSize = null;
        return $this;
    }

    /**
     * Getter for maxFileSize
     *
     * @return int
     */
    public function getMaxFileSize()
    {
        return $this->maxFileSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxFileSize;
    }

    /**
     * Setter for maxFileSize
     *
     * @param int $maxFileSize
     * @return $this
     */
    public function setMaxFileSize($maxFileSize)
    {
        $this->maxFileSize = $maxFileSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxFileSize()
    {
        $this->maxFileSize = null;
        return $this;
    }
}

