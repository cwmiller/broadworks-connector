<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingNetworkSIPStatusDeleteRequest
 *
 * Delete a Network SIP Status Code mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17887","type":"sequence"}]
 */
class SystemTreatmentMappingNetworkSIPStatusDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName sipStatusCode
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17887
     * @MinInclusive 400
     * @MaxInclusive 699
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

