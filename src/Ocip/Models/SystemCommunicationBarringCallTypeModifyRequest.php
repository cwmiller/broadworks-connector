<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCallTypeModifyRequest
 *
 * Modify a Communication Barring Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCommunicationBarringCallTypeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callType
     * @var string|null
     */
    private $callType = null;

    /**
     * @ElementName networkServerCallType
     * @var string|null
     */
    private $networkServerCallType = null;

    /**
     * Getter for callType
     *
     * @ElementName callType
     * @return string|null
     */
    public function getCallType()
    {
        return $this->callType;
    }

    /**
     * Setter for callType
     *
     * @ElementName callType
     * @param string|null $callType
     * @return $this
     */
    public function setCallType($callType)
    {
        $this->callType = $callType;
        return $this;
    }

    /**
     * Getter for networkServerCallType
     *
     * @ElementName networkServerCallType
     * @return string|null
     */
    public function getNetworkServerCallType()
    {
        return $this->networkServerCallType;
    }

    /**
     * Setter for networkServerCallType
     *
     * @ElementName networkServerCallType
     * @param string|null $networkServerCallType
     * @return $this
     */
    public function setNetworkServerCallType($networkServerCallType)
    {
        $this->networkServerCallType = $networkServerCallType;
        return $this;
    }


}

