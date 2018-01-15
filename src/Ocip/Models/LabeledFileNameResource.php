<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LabeledFileNameResource
 *
 * Represents an existing file for the application server to use, along with
 *         a description and mediaType.
 */
class LabeledFileNameResource
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName mediaType
     * @var string|null
     */
    private $mediaType = null;

    /**
     * @ElementName sourceFileName
     * @var string|null
     */
    private $sourceFileName = null;

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for mediaType
     *
     * @ElementName mediaType
     * @return string|null
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }

    /**
     * Setter for mediaType
     *
     * @ElementName mediaType
     * @param string|null $mediaType
     * @return $this
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    /**
     * Getter for sourceFileName
     *
     * @ElementName sourceFileName
     * @return string|null
     */
    public function getSourceFileName()
    {
        return $this->sourceFileName;
    }

    /**
     * Setter for sourceFileName
     *
     * @ElementName sourceFileName
     * @param string|null $sourceFileName
     * @return $this
     */
    public function setSourceFileName($sourceFileName)
    {
        $this->sourceFileName = $sourceFileName;
        return $this;
    }


}

