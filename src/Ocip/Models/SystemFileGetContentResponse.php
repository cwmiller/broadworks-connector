<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileGetContentResponse
 *
 * Response to a SystemFileGetContentRequest. The fileContent length returned is
 * limited to 128KBytes.
 *
 * @see SystemFileGetContentRequest
 */
class SystemFileGetContentResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileContent
     * @Type string
     * @var string|null
     */
    private $fileContent = null;

    /**
     * Getter for fileContent
     *
     * @return string
     */
    public function getFileContent()
    {
        return $this->fileContent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileContent;
    }

    /**
     * Setter for fileContent
     *
     * @param string $fileContent
     * @return $this
     */
    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileContent()
    {
        $this->fileContent = null;
        return $this;
    }


}

