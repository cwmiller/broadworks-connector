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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5695","type":"sequence"}]
 */
class SystemCommunicationBarringCallTypeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:5695
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $callType = null;

    /**
     * @ElementName networkServerCallType
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:5695
     * @MinLength 1
     * @MaxLength 4
     * @var string|null
     */
    protected $networkServerCallType = null;

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

