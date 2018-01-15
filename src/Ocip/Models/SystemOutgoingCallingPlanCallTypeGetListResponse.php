<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanCallTypeGetListResponse
 *
 * Response to SystemOutgoingCallingPlanCallTypeGetListRequest.
 */
class SystemOutgoingCallingPlanCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callType
     * @var string[]
     */
    private $callType = array(
        
    );

    /**
     * Getter for callType
     *
     * @ElementName callType
     * @return string[]
     */
    public function getCallType()
    {
        return $this->callType;
    }

    /**
     * Setter for callType
     *
     * @ElementName callType
     * @param string[] $callType
     * @return $this
     */
    public function setCallType($callType)
    {
        $this->callType = $callType;
        return $this;
    }

    /**
     * Adder for callType
     *
     * @ElementName callType
     * @param string $callType
     * @return $this
     */
    public function addCallType($callType)
    {
        $this->callType []= $callType;
        return $this;
    }


}

