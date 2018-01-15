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
     * @var string|null
     */
    private $mediaFileType = null;

    /**
     * @ElementName level
     * @var string|null
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
     * @return string|null
     */
    public function getMediaFileType()
    {
        return $this->mediaFileType;
    }

    /**
     * Setter for mediaFileType
     *
     * @ElementName mediaFileType
     * @param string|null $mediaFileType
     * @return $this
     */
    public function setMediaFileType($mediaFileType)
    {
        $this->mediaFileType = $mediaFileType;
        return $this;
    }

    /**
     * Getter for level
     *
     * @ElementName level
     * @return string|null
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Setter for level
     *
     * @ElementName level
     * @param string|null $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }


}

