<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LabeledFileResource
 *
 * Represents either an existing file for the application server to use, or
 *         the contents of a file to transfer with a description.
 */
class LabeledFileResource
{

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName sourceFileName
     * @var string|null
     */
    private $sourceFileName = null;

    /**
     * @ElementName content
     * @var string|null
     */
    private $content = null;

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

    /**
     * Getter for content
     *
     * @ElementName content
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Setter for content
     *
     * @ElementName content
     * @param string|null $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }


}
