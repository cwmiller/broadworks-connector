<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LabeledFileNameResource
 *
 * Represents an existing file for the application server to use, along with
 *         a description and mediaType.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2496","type":"sequence"}]
 */
class LabeledFileNameResource
{

    /**
     * @ElementName description
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2496
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName mediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2496
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $mediaType = null;

    /**
     * @ElementName sourceFileName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2496
     * @var string|null
     */
    private $sourceFileName = null;

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for mediaType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     */
    public function getMediaType()
    {
        return $this->mediaType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaType;
    }

    /**
     * Setter for mediaType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaType
     * @return $this
     */
    public function setMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $mediaType)
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaType()
    {
        $this->mediaType = null;
        return $this;
    }

    /**
     * Getter for sourceFileName
     *
     * @return string
     */
    public function getSourceFileName()
    {
        return $this->sourceFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sourceFileName;
    }

    /**
     * Setter for sourceFileName
     *
     * @param string $sourceFileName
     * @return $this
     */
    public function setSourceFileName($sourceFileName)
    {
        $this->sourceFileName = $sourceFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSourceFileName()
    {
        $this->sourceFileName = null;
        return $this;
    }


}

