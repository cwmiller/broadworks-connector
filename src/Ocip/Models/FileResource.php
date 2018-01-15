<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileResource
 *
 * Represents either an existing file for the application server to use, or
 *         the contents of a file to transfer.
 */
class FileResource
{

    /**
     * @ElementName sourceFileName
     * @var string|null
     */
    private $sourceFileName = null;

    /**
     * @ElementName fileContent
     * @var string|null
     */
    private $fileContent = null;

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
     * Getter for fileContent
     *
     * @ElementName fileContent
     * @return string|null
     */
    public function getFileContent()
    {
        return $this->fileContent;
    }

    /**
     * Setter for fileContent
     *
     * @ElementName fileContent
     * @param string|null $fileContent
     * @return $this
     */
    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;
        return $this;
    }


}

