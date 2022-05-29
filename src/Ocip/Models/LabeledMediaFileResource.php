<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LabeledMediaFileResource
 *
 * Represents either an existing file for the application server to use, or
 *         the contents of a file to transfer with a description.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2995","type":"sequence","children":[{"id":"c0d21ef9ba207c335d8347e5172fce1d:2998","type":"choice"}]}]
 */
class LabeledMediaFileResource
{

    /**
     * @ElementName description
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2995
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName mediaType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaFileType
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2995
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    protected $mediaType = null;

    /**
     * @ElementName sourceFileName
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2998
     * @MinLength 1
     * @var string|null
     */
    protected $sourceFileName = null;

    /**
     * @ElementName content
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2998
     * @var string|null
     */
    protected $content = null;

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

    /**
     * Getter for content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->content;
    }

    /**
     * Setter for content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContent()
    {
        $this->content = null;
        return $this;
    }


}

