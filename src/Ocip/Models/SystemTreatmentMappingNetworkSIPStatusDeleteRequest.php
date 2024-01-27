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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19195","type":"sequence"}]
 */
class SystemTreatmentMappingNetworkSIPStatusDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName sipStatusCode
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:19195
     * @MinInclusive 400
     * @MaxInclusive 699
     * @var int|null
     */
    protected $sipStatusCode = null;

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

