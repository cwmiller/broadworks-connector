<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileGetContentResponse
 *
 * Response to a SystemFileGetContentRequest. The fileContent length returned is limited to 128KBytes.
 *
 * @see SystemFileGetContentRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10237","type":"sequence"}]
 */
class SystemFileGetContentResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileContent
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10237
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

