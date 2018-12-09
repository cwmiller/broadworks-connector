<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetResponse
 *
 * Response to the SystemNumberPortabilityQueryDigitPatternGetRequest.
 *
 * @see SystemNumberPortabilityQueryDigitPatternGetRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:11369","type":"sequence"}]
 */
class SystemNumberPortabilityQueryDigitPatternGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName status
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:11369
     * @var string|null
     */
    private $status = null;

    /**
     * Getter for status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->status;
    }

    /**
     * Setter for status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatus()
    {
        $this->status = null;
        return $this;
    }


}

