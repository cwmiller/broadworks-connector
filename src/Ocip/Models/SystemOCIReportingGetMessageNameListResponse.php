<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCIReportingGetMessageNameListResponse
 *
 * Response to SystemOCIReportingGetMessageNameListRequest.
 *
 * @see SystemOCIReportingGetMessageNameListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13943","type":"sequence"}]
 */
class SystemOCIReportingGetMessageNameListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName messageNameStartsWith
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:13943
     * @MinLength 1
     * @MaxLength 256
     * @var string[]
     */
    protected $messageNameStartsWith = [
        
    ];

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

