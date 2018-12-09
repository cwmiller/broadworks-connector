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
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:16570","type":"sequence"}]
 */
class SystemTreatmentMappingInternalReleaseCauseDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName internalReleaseCause
     * @Type \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16
     * @Group b5f5416d9e71f8e4246cda16c4723744:16570
     * @var \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16|null
     */
    private $internalReleaseCause = null;

    /**
     * Getter for internalReleaseCause
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internalReleaseCause;
    }

    /**
     * Setter for internalReleaseCause
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16 $internalReleaseCause
     * @return $this
     */
    public function setInternalReleaseCause(\CWM\BroadWorksConnector\Ocip\Models\InternalReleaseCause16 $internalReleaseCause)
    {
        $this->internalReleaseCause = $internalReleaseCause;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternalReleaseCause()
    {
        $this->internalReleaseCause = null;
        return $this;
    }


}

