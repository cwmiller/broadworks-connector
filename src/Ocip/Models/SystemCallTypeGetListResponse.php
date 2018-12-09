<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeGetListResponse
 *
 * Response to SystemCallTypeGetListRequest.
 *
 * @see SystemCallTypeGetListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:4556","type":"sequence"}]
 */
class SystemCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemCallType
     * @Array
     * @Group b5f5416d9e71f8e4246cda16c4723744:4556
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCallType[]
     */
    private $callType = array(
        
    );

    /**
     * Getter for callType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemCallType[]
     */
    public function getCallType()
    {
        return $this->callType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callType;
    }

    /**
     * Setter for callType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCallType[] $callType
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCallType $callType
     * @return $this
     */
    public function addCallType($callType)
    {
        $this->callType[] = $callType;
        return $this;
    }


}

