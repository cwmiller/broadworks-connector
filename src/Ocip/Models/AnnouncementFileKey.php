<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AnnouncementFileKey
 *
 * Uniquely identifies a file within a group or user repository.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:475","type":"sequence"}]
 */
class AnnouncementFileKey
{

    /**
     * @ElementName name
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:475
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName mediaFileType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Group c0d21ef9ba207c335d8347e5172fce1d:475
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $mediaFileType = null;

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


}

