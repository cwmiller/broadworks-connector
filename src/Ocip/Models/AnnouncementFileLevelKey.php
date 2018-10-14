<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AnnouncementFileLevelKey
 *
 * Uniquely identifies a file within a group or user repository.
 *         Includes level to distinguish between group and user announcements 
 *         in scenarios where both are listed.
 */
class AnnouncementFileLevelKey
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName mediaFileType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $mediaFileType = null;

    /**
     * @ElementName level
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementRepositoryType|null
     */
    private $level = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for mediaFileType
     *
     * @ElementName mediaFileType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getMediaFileType()
    {
        return $this->mediaFileType;
    }

    /**
     * Setter for mediaFileType
     *
     * @ElementName mediaFileType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $mediaFileType
     * @return $this
     */
    public function setMediaFileType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaFileType)
    {
        $this->mediaFileType = $mediaFileType;
        return $this;
    }

    /**
     * Getter for level
     *
     * @ElementName level
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementRepositoryType|null
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Setter for level
     *
     * @ElementName level
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementRepositoryType|null $level
     * @return $this
     */
    public function setLevel(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementRepositoryType $level)
    {
        $this->level = $level;
        return $this;
    }


}

