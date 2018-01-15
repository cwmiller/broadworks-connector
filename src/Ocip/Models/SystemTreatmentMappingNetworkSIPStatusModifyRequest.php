<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingNetworkSIPStatusModifyRequest
 *
 * Modify the fields for a Network SIP Status Code mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingNetworkSIPStatusModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName sipStatusCode
     * @var int|null
     */
    private $sipStatusCode = null;

    /**
     * @ElementName treatmentId
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for sipStatusCode
     *
     * @ElementName sipStatusCode
     * @return int|null
     */
    public function getSipStatusCode()
    {
        return $this->sipStatusCode;
    }

    /**
     * Setter for sipStatusCode
     *
     * @ElementName sipStatusCode
     * @param int|null $sipStatusCode
     * @return $this
     */
    public function setSipStatusCode($sipStatusCode)
    {
        $this->sipStatusCode = $sipStatusCode;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @ElementName treatmentId
     * @return string|null
     */
    public function getTreatmentId()
    {
        return $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @ElementName treatmentId
     * @param string|null $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }


}

