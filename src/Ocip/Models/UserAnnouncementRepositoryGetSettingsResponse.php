<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnnouncementRepositoryGetSettingsResponse
 *
 * Response to UserAnnouncementRepositoryGetSettingsRequest.
 *         The response contains the current total file size (KB) for the user
 * across
 *         all media types and the maximum total file size (MB) allowed for the
 * user.
 *         It also indicates the maximum file size for individual audio and video
 * files.
 */
class UserAnnouncementRepositoryGetSettingsResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalFileSize
     * @var int|null
     */
    private $totalFileSize = null;

    /**
     * @ElementName maxAudioFileSize
     * @var int|null
     */
    private $maxAudioFileSize = null;

    /**
     * @ElementName maxVideoFileSize
     * @var int|null
     */
    private $maxVideoFileSize = null;

    /**
     * @ElementName maxFileSize
     * @var int|null
     */
    private $maxFileSize = null;

    /**
     * Getter for totalFileSize
     *
     * @ElementName totalFileSize
     * @return int|null
     */
    public function getTotalFileSize()
    {
        return $this->totalFileSize;
    }

    /**
     * Setter for totalFileSize
     *
     * @ElementName totalFileSize
     * @param int|null $totalFileSize
     * @return $this
     */
    public function setTotalFileSize($totalFileSize)
    {
        $this->totalFileSize = $totalFileSize;
        return $this;
    }

    /**
     * Getter for maxAudioFileSize
     *
     * @ElementName maxAudioFileSize
     * @return int|null
     */
    public function getMaxAudioFileSize()
    {
        return $this->maxAudioFileSize;
    }

    /**
     * Setter for maxAudioFileSize
     *
     * @ElementName maxAudioFileSize
     * @param int|null $maxAudioFileSize
     * @return $this
     */
    public function setMaxAudioFileSize($maxAudioFileSize)
    {
        $this->maxAudioFileSize = $maxAudioFileSize;
        return $this;
    }

    /**
     * Getter for maxVideoFileSize
     *
     * @ElementName maxVideoFileSize
     * @return int|null
     */
    public function getMaxVideoFileSize()
    {
        return $this->maxVideoFileSize;
    }

    /**
     * Setter for maxVideoFileSize
     *
     * @ElementName maxVideoFileSize
     * @param int|null $maxVideoFileSize
     * @return $this
     */
    public function setMaxVideoFileSize($maxVideoFileSize)
    {
        $this->maxVideoFileSize = $maxVideoFileSize;
        return $this;
    }

    /**
     * Getter for maxFileSize
     *
     * @ElementName maxFileSize
     * @return int|null
     */
    public function getMaxFileSize()
    {
        return $this->maxFileSize;
    }

    /**
     * Setter for maxFileSize
     *
     * @ElementName maxFileSize
     * @param int|null $maxFileSize
     * @return $this
     */
    public function setMaxFileSize($maxFileSize)
    {
        $this->maxFileSize = $maxFileSize;
        return $this;
    }


}

