<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LabeledFileResource
 *
 * Represents either an existing file for the application server to use, or
 *         the contents of a file to transfer with a description.
 *
 * @Groups [{"id":"18b369af88e42ffdb4166615c670ce2c:2163","type":"sequence","children":[{"id":"18b369af88e42ffdb4166615c670ce2c:2165","type":"choice"}]}]
 */
class LabeledFileResource
{

    /**
     * @ElementName description
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:2163
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName sourceFileName
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:2165
     * @var string|null
     */
    private $sourceFileName = null;

    /**
     * @ElementName content
     * @Type string
     * @Group 18b369af88e42ffdb4166615c670ce2c:2165
     * @var string|null
     */
    private $content = null;

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

