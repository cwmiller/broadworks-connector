<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeGetListResponse
 *
 * Response to SystemCallTypeGetListRequest.
 *
 * @see SystemCallTypeGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:4612","type":"sequence"}]
 */
class SystemCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemCallType
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:4612
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

