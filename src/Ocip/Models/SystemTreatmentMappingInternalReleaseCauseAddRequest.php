<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingInternalReleaseCauseAddRequest
 *
 * Add an Internal Release Cause mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemTreatmentMappingInternalReleaseCauseAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName internalReleaseCause
     * @var \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16|null
     */
    private $internalReleaseCause = null;

    /**
     * @ElementName treatmentId
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for internalReleaseCause
     *
     * @ElementName internalReleaseCause
     * @return \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16|null
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause;
    }

    /**
     * Setter for internalReleaseCause
     *
     * @ElementName internalReleaseCause
     * @param \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16|null $internalReleaseCause
     * @return $this
     */
    public function setInternalReleaseCause(\CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16 $internalReleaseCause)
    {
        $this->internalReleaseCause = $internalReleaseCause;
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

