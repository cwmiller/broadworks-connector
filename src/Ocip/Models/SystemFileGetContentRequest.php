<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileGetContentRequest
 *
 * Requests the contents of a file.
 *         The response is either a SystemFileGetContentResponse or an
 *         ErrorResponse.
 */
class SystemFileGetContentRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName fileName
     * @var string|null
     */
    private $fileName = null;

    /**
     * Getter for fileName
     *
     * @ElementName fileName
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Setter for fileName
     *
     * @ElementName fileName
     * @param string|null $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }


}

