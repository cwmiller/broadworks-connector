<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingInternalReleaseCauseDeleteRequest
 *
 * Delete an Internal Release Cause mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemTreatmentMappingInternalReleaseCauseDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName internalReleaseCause
     * @var \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16|null
     */
    private $internalReleaseCause = null;

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


}

