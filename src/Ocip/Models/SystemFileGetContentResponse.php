<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileGetContentResponse
 *
 * Response to a SystemFileGetContentRequest. The fileContent length returned is
 * limited to 128KBytes.
 */
class SystemFileGetContentResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileContent
     * @var string|null
     */
    private $fileContent = null;

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

