<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeGetListResponse
 *
 * Response to SystemCallTypeGetListRequest.
 *
 * @see SystemCallTypeGetListRequest
 */
class SystemCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCallType[]
     */
    private $callType = array(
        
    );

    /**
     * Getter for callType
     *
     * @ElementName callType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemCallType[]
     */
    public function getCallType()
    {
        return $this->callType;
    }

    /**
     * Setter for callType
     *
     * @ElementName callType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCallType[] $callType
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCallType $callType
     * @return $this
     */
    public function addCallType($callType)
    {
        $this->callType []= $callType;
        return $this;
    }


}

