<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDTMFTransmissionModifyRequest
 *
 * Modify the DTMF transmission settings.
 *       The response is either SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemDTMFTransmissionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName transmissionMethod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DTMFTransmissionMethod
     * @var \CWM\BroadWorksConnector\Ocip\Models\DTMFTransmissionMethod|null
     */
    private $transmissionMethod = null;

    /**
     * @ElementName signalingContentType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DtmfTransmissionSignalingContentType
     * @var \CWM\BroadWorksConnector\Ocip\Models\DtmfTransmissionSignalingContentType|null
     */
    private $signalingContentType = null;

    /**
     * Getter for transmissionMethod
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DTMFTransmissionMethod
     */
    public function getTransmissionMethod()
    {
        return $this->transmissionMethod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transmissionMethod;
    }

    /**
     * Setter for transmissionMethod
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DTMFTransmissionMethod $transmissionMethod
     * @return $this
     */
    public function setTransmissionMethod(\CWM\BroadWorksConnector\Ocip\Models\DTMFTransmissionMethod $transmissionMethod)
    {
        $this->transmissionMethod = $transmissionMethod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransmissionMethod()
    {
        $this->transmissionMethod = null;
        return $this;
    }

    /**
     * Getter for signalingContentType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DtmfTransmissionSignalingContentType
     */
    public function getSignalingContentType()
    {
        return $this->signalingContentType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->signalingContentType;
    }

    /**
     * Setter for signalingContentType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DtmfTransmissionSignalingContentType $signalingContentType
     * @return $this
     */
    public function setSignalingContentType(\CWM\BroadWorksConnector\Ocip\Models\DtmfTransmissionSignalingContentType $signalingContentType)
    {
        $this->signalingContentType = $signalingContentType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSignalingContentType()
    {
        $this->signalingContentType = null;
        return $this;
    }


}

