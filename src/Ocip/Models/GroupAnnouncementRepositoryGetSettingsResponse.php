<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAnnouncementRepositoryGetSettingsResponse
 *
 * Response to GroupAnnouncementFileGetSettingsRequest.
 *         The response contains the current total file size (KB) for the group across
 *         all media types and the maximum total file size (MB) allowed for the group.
 *         It also indicates the maximum file size for individual audio and video files.
 *
 * @see GroupAnnouncementFileGetSettingsRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:2121","type":"sequence"}]
 */
class GroupAnnouncementRepositoryGetSettingsResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalFileSize
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2121
     * @var int|null
     */
    private $totalFileSize = null;

    /**
     * @ElementName maxAudioFileSize
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2121
     * @var int|null
     */
    private $maxAudioFileSize = null;

    /**
     * @ElementName maxVideoFileSize
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2121
     * @var int|null
     */
    private $maxVideoFileSize = null;

    /**
     * @ElementName maxFileSize
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:2121
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    private $maxFileSize = null;

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

