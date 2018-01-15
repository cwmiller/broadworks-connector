<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingGetMessageNameListResponse
 *
 * Response to SystemOCIReportingGetMessageNameListRequest.
 */
class SystemOCIReportingGetMessageNameListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName messageNameStartsWith
     * @var string[]
     */
    private $messageNameStartsWith = array(
        
    );

    /**
     * Getter for messageNameStartsWith
     *
     * @ElementName messageNameStartsWith
     * @return string[]
     */
    public function getMessageNameStartsWith()
    {
        return $this->messageNameStartsWith;
    }

    /**
     * Setter for messageNameStartsWith
     *
     * @ElementName messageNameStartsWith
     * @param string[] $messageNameStartsWith
     * @return $this
     */
    public function setMessageNameStartsWith($messageNameStartsWith)
    {
        $this->messageNameStartsWith = $messageNameStartsWith;
        return $this;
    }

    /**
     * Adder for messageNameStartsWith
     *
     * @ElementName messageNameStartsWith
     * @param string $messageNameStartsWith
     * @return $this
     */
    public function addMessageNameStartsWith($messageNameStartsWith)
    {
        $this->messageNameStartsWith []= $messageNameStartsWith;
        return $this;
    }


}

