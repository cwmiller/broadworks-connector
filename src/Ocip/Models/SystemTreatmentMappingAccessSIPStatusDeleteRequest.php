<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingAccessSIPStatusDeleteRequest
 *
 * Delete an Access SIP Status Code mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemTreatmentMappingAccessSIPStatusDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName sipStatusCode
     * @Type int
     * @var int|null
     */
    private $sipStatusCode = null;

    /**
     * Getter for sipStatusCode
     *
     * @return int
     */
    public function getSipStatusCode()
    {
        return $this->sipStatusCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipStatusCode;
    }

    /**
     * Setter for sipStatusCode
     *
     * @param int $sipStatusCode
     * @return $this
     */
    public function setSipStatusCode($sipStatusCode)
    {
        $this->sipStatusCode = $sipStatusCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipStatusCode()
    {
        $this->sipStatusCode = null;
        return $this;
    }


}

