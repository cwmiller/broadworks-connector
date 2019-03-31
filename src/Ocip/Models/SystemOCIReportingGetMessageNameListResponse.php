<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingGetMessageNameListResponse
 *
 * Response to SystemOCIReportingGetMessageNameListRequest.
 *
 * @see SystemOCIReportingGetMessageNameListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12645","type":"sequence"}]
 */
class SystemOCIReportingGetMessageNameListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName messageNameStartsWith
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12645
     * @MinLength 1
     * @MaxLength 256
     * @var string[]
     */
    private $messageNameStartsWith = array(
        
    );

    /**
     * Getter for messageNameStartsWith
     *
     * @return string[]
     */
    public function getMessageNameStartsWith()
    {
        return $this->messageNameStartsWith instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageNameStartsWith;
    }

    /**
     * Setter for messageNameStartsWith
     *
     * @param string[] $messageNameStartsWith
     * @return $this
     */
    public function setMessageNameStartsWith(array $messageNameStartsWith)
    {
        $this->messageNameStartsWith = $messageNameStartsWith;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMessageNameStartsWith()
    {
        $this->messageNameStartsWith = null;
        return $this;
    }

    /**
     * Adder for messageNameStartsWith
     *
     * @param string $messageNameStartsWith
     * @return $this
     */
    public function addMessageNameStartsWith(string $messageNameStartsWith)
    {
        $this->messageNameStartsWith[] = $messageNameStartsWith;
        return $this;
    }


}

