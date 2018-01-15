<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingQ850CauseDeleteRequest
 *
 * Delete a Q850 Cause Value mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingQ850CauseDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName q850CauseValue
     * @var int|null
     */
    private $q850CauseValue = null;

    /**
     * Getter for q850CauseValue
     *
     * @ElementName q850CauseValue
     * @return int|null
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue;
    }

    /**
     * Setter for q850CauseValue
     *
     * @ElementName q850CauseValue
     * @param int|null $q850CauseValue
     * @return $this
     */
    public function setQ850CauseValue($q850CauseValue)
    {
        $this->q850CauseValue = $q850CauseValue;
        return $this;
    }


}

