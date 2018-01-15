<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCallTypeDeleteRequest
 *
 * Delete a Communication Barring Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringCallTypeDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callType
     * @var string|null
     */
    private $callType = null;

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


}

