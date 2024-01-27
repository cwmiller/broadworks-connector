<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanCallTypeGetListResponse
 *
 * Response to SystemOutgoingCallingPlanCallTypeGetListRequest.
 *
 * @see SystemOutgoingCallingPlanCallTypeGetListRequest
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:923","type":"sequence"}]
 */
class SystemOutgoingCallingPlanCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName callType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType
     * @Array
     * @Group a63afa661ee5c74f4700e562e88c66d0:923
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType[]
     */
    protected $callType = [
        
    ];

    /**
     * Getter for callType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType[]
     */
    public function getCallType()
    {
        return $this->callType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callType;
    }

    /**
     * Setter for callType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType[] $callType
     * @return $this
     */
    public function setCallType(array $callType)
    {
        $this->callType = $callType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallType()
    {
        $this->callType = null;
        return $this;
    }

    /**
     * Adder for callType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType $callType
     * @return $this
     */
    public function addCallType($callType)
    {
        $this->callType[] = $callType;
        return $this;
    }
}

