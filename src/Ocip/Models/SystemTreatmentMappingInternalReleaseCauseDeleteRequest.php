<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingInternalReleaseCauseDeleteRequest
 *
 * Delete an Internal Release Cause mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingInternalReleaseCauseDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName internalReleaseCause
     * @var string|null
     */
    private $internalReleaseCause = null;

    /**
     * Getter for internalReleaseCause
     *
     * @ElementName internalReleaseCause
     * @return string|null
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause;
    }

    /**
     * Setter for internalReleaseCause
     *
     * @ElementName internalReleaseCause
     * @param string|null $internalReleaseCause
     * @return $this
     */
    public function setInternalReleaseCause($internalReleaseCause)
    {
        $this->internalReleaseCause = $internalReleaseCause;
        return $this;
    }


}

