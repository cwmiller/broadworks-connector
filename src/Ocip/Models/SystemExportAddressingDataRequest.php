<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExportAddressingDataRequest
 *
 * Request to export Application Server addressing data, such as DNs, extensions, alias and user ids
 *         to a file so they can be uploaded to a Network Server.
 *         In XS data mode, response is sent without waiting for completion.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9934","type":"sequence"}]
 */
class SystemExportAddressingDataRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName fileName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9934
     * @MinLength 1
     * @var string|null
     */
    private $fileName = null;

    /**
     * Getter for fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileName;
    }

    /**
     * Setter for fileName
     *
     * @param string $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileName()
    {
        $this->fileName = null;
        return $this;
    }


}

