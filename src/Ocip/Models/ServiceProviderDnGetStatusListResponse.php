<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDnGetStatusListResponse
 *
 * Response to ServiceProviderDnGetStatusListRequest.
 *
 * @see ServiceProviderDnGetStatusListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3951","type":"sequence"}]
 */
class ServiceProviderDnGetStatusListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dnStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:3951
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

