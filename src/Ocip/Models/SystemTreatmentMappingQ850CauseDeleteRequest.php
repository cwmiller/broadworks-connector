<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingQ850CauseDeleteRequest
 *
 * Delete a Q850 Cause Value mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19276","type":"sequence"}]
 */
class SystemTreatmentMappingQ850CauseDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName q850CauseValue
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:19276
     * @MinInclusive 1
     * @MaxInclusive 256
     * @var int|null
     */
    protected $q850CauseValue = null;

    /**
     * Getter for q850CauseValue
     *
     * @return int
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->q850CauseValue;
    }

    /**
     * Setter for q850CauseValue
     *
     * @param int $q850CauseValue
     * @return $this
     */
    public function setQ850CauseValue($q850CauseValue)
    {
        $this->q850CauseValue = $q850CauseValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQ850CauseValue()
    {
        $this->q850CauseValue = null;
        return $this;
    }
}

