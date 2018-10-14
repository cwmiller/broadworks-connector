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
     * @var \CWM\BroadWorksConnector\Ocip\Models\DTMFTransmissionMethod|null
     */
    private $transmissionMethod = null;

    /**
     * @ElementName signalingContentType
     * @var \CWM\BroadWorksConnector\Ocip\Models\DtmfTransmissionSignalingContentType|null
     */
    private $signalingContentType = null;

    /**
     * Getter for transmissionMethod
     *
     * @ElementName transmissionMethod
     * @return \CWM\BroadWorksConnector\Ocip\Models\DTMFTransmissionMethod|null
     */
    public function getTransmissionMethod()
    {
        return $this->transmissionMethod;
    }

    /**
     * Setter for transmissionMethod
     *
     * @ElementName transmissionMethod
     * @param \CWM\BroadWorksConnector\Ocip\Models\DTMFTransmissionMethod|null $transmissionMethod
     * @return $this
     */
    public function setTransmissionMethod(\CWM\BroadWorksConnector\Ocip\Models\DTMFTransmissionMethod $transmissionMethod)
    {
        $this->transmissionMethod = $transmissionMethod;
        return $this;
    }

    /**
     * Getter for signalingContentType
     *
     * @ElementName signalingContentType
     * @return \CWM\BroadWorksConnector\Ocip\Models\DtmfTransmissionSignalingContentType|null
     */
    public function getSignalingContentType()
    {
        return $this->signalingContentType;
    }

    /**
     * Setter for signalingContentType
     *
     * @ElementName signalingContentType
     * @param \CWM\BroadWorksConnector\Ocip\Models\DtmfTransmissionSignalingContentType|null $signalingContentType
     * @return $this
     */
    public function setSignalingContentType(\CWM\BroadWorksConnector\Ocip\Models\DtmfTransmissionSignalingContentType $signalingContentType)
    {
        $this->signalingContentType = $signalingContentType;
        return $this;
    }


}

