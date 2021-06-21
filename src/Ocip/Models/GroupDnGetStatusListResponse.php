<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetStatusListResponse
 *
 * Response to GroupDnGetStatusListRequest.
 *
 * @see GroupDnGetStatusListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:5329","type":"sequence"}]
 */
class GroupDnGetStatusListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5329
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage[]
     */
    private $dnStatus = array(
        
    );

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

