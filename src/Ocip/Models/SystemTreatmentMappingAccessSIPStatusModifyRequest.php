<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingAccessSIPStatusModifyRequest
 *
 * Modify the fields for an Access SIP Status Code mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18913","type":"sequence"}]
 */
class SystemTreatmentMappingAccessSIPStatusModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName sipStatusCode
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:18913
     * @MinInclusive 400
     * @MaxInclusive 699
     * @var int|null
     */
    protected $sipStatusCode = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18913
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $treatmentId = null;

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

    /**
     * Getter for treatmentId
     *
     * @return string
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentId()
    {
        $this->treatmentId = null;
        return $this;
    }
}

