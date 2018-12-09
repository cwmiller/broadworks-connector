<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCallTypeAddRequest
 *
 * Add a Communication Barring Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:4860","type":"sequence"}]
 */
class SystemCommunicationBarringCallTypeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callType
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:4860
     * @var string|null
     */
    private $callType = null;

    /**
     * @ElementName networkServerCallType
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:4860
     * @var string|null
     */
    private $networkServerCallType = null;

    /**
     * Getter for callType
     *
     * @return string
     */
    public function getCallType()
    {
        return $this->callType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callType;
    }

    /**
     * Setter for callType
     *
     * @param string $callType
     * @return $this
     */
    public function setCallType($callType)
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
     * Getter for networkServerCallType
     *
     * @return string
     */
    public function getNetworkServerCallType()
    {
        return $this->networkServerCallType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkServerCallType;
    }

    /**
     * Setter for networkServerCallType
     *
     * @param string $networkServerCallType
     * @return $this
     */
    public function setNetworkServerCallType($networkServerCallType)
    {
        $this->networkServerCallType = $networkServerCallType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkServerCallType()
    {
        $this->networkServerCallType = null;
        return $this;
    }


}

