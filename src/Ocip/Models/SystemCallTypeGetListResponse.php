<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallTypeGetListResponse
 *
 * Response to SystemCallTypeGetListRequest.
 *
 * @see SystemCallTypeGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5308","type":"sequence"}]
 */
class SystemCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName callType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemCallType
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:5308
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCallType[]
     */
    protected $callType = [
        
    ];

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

