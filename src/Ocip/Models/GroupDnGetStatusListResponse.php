<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetStatusListResponse
 *
 * Response to GroupDnGetStatusListRequest.
 *
 * @see GroupDnGetStatusListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5066","type":"sequence"}]
 */
class GroupDnGetStatusListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dnStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5066
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage[]
     */
    protected $dnStatus = [
        
    ];

    /**
     * Getter for dnStatus
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage[]
     */
    public function getDnStatus()
    {
        return $this->dnStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnStatus;
    }

    /**
     * Setter for dnStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage[] $dnStatus
     * @return $this
     */
    public function setDnStatus(array $dnStatus)
    {
        $this->dnStatus = $dnStatus;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnStatus()
    {
        $this->dnStatus = null;
        return $this;
    }

    /**
     * Adder for dnStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage $dnStatus
     * @return $this
     */
    public function addDnStatus($dnStatus)
    {
        $this->dnStatus[] = $dnStatus;
        return $this;
    }
}

