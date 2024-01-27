<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileGetContentResponse
 *
 * Response to a SystemFileGetContentRequest. The fileContent length returned is limited to 128KBytes.
 *
 * @see SystemFileGetContentRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10352","type":"sequence"}]
 */
class SystemFileGetContentResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName fileContent
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:10352
     * @var string|null
     */
    protected $fileContent = null;

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

