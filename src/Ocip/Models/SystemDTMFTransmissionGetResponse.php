<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDTMFTransmissionGetResponse
 *
 * Response to the SystemDTMFTransmissionGetRequest.
 */
class SystemDTMFTransmissionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName transmissionMethod
     * @var string|null
     */
    private $transmissionMethod = null;

    /**
     * @ElementName signalingContentType
     * @var string|null
     */
    private $signalingContentType = null;

    /**
     * Getter for transmissionMethod
     *
     * @ElementName transmissionMethod
     * @return string|null
     */
    public function getTransmissionMethod()
    {
        return $this->transmissionMethod;
    }

    /**
     * Setter for transmissionMethod
     *
     * @ElementName transmissionMethod
     * @param string|null $transmissionMethod
     * @return $this
     */
    public function setTransmissionMethod($transmissionMethod)
    {
        $this->transmissionMethod = $transmissionMethod;
        return $this;
    }

    /**
     * Getter for signalingContentType
     *
     * @ElementName signalingContentType
     * @return string|null
     */
    public function getSignalingContentType()
    {
        return $this->signalingContentType;
    }

    /**
     * Setter for signalingContentType
     *
     * @ElementName signalingContentType
     * @param string|null $signalingContentType
     * @return $this
     */
    public function setSignalingContentType($signalingContentType)
    {
        $this->signalingContentType = $signalingContentType;
        return $this;
    }


}

