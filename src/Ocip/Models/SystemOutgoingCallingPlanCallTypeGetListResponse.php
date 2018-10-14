<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanCallTypeGetListResponse
 *
 * Response to SystemOutgoingCallingPlanCallTypeGetListRequest.
 *
 * @see SystemOutgoingCallingPlanCallTypeGetListRequest
 */
class SystemOutgoingCallingPlanCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callType
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType[]
     */
    private $callType = array(
        
    );

    /**
     * Getter for callType
     *
     * @ElementName callType
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType[]
     */
    public function getCallType()
    {
        return $this->callType;
    }

    /**
     * Setter for callType
     *
     * @ElementName callType
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType[] $callType
     * @return $this
     */
    public function setCallType(array $callType)
    {
        $this->callType = $callType;
        return $this;
    }

    /**
     * Adder for callType
     *
     * @ElementName callType
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType $callType
     * @return $this
     */
    public function addCallType($callType)
    {
        $this->callType []= $callType;
        return $this;
    }


}

