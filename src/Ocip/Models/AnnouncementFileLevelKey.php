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
     * @Type string
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName mediaFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $mediaFileType = null;

    /**
     * @ElementName level
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementRepositoryType
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementRepositoryType|null
     */
    private $level = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for mediaFileType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getMediaFileType()
    {
        return $this->mediaFileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaFileType;
    }

    /**
     * Setter for mediaFileType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaFileType
     * @return $this
     */
    public function setMediaFileType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaFileType)
    {
        $this->mediaFileType = $mediaFileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaFileType()
    {
        $this->mediaFileType = null;
        return $this;
    }

    /**
     * Getter for level
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementRepositoryType
     */
    public function getLevel()
    {
        return $this->level instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->level;
    }

    /**
     * Setter for level
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementRepositoryType $level
     * @return $this
     */
    public function setLevel(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementRepositoryType $level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLevel()
    {
        $this->level = null;
        return $this;
    }


}

