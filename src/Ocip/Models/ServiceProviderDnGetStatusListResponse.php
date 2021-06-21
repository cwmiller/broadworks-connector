<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDnGetStatusListResponse
 *
 * Response to ServiceProviderDnGetStatusListRequest.
 *
 * @see ServiceProviderDnGetStatusListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3875","type":"sequence"}]
 */
class ServiceProviderDnGetStatusListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3875
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

