<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConnectedLineIdentificationPresentationModifyRequest
 *
 * Modify the system level data associated with the COLP Service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemConnectedLineIdentificationPresentationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enforceUserServiceAssignment
     * @var bool|null
     */
    private $enforceUserServiceAssignment = null;

    /**
     * Getter for enforceUserServiceAssignment
     *
     * @ElementName enforceUserServiceAssignment
     * @return bool|null
     */
    public function getEnforceUserServiceAssignment()
    {
        return $this->enforceUserServiceAssignment;
    }

    /**
     * Setter for enforceUserServiceAssignment
     *
     * @ElementName enforceUserServiceAssignment
     * @param bool|null $enforceUserServiceAssignment
     * @return $this
     */
    public function setEnforceUserServiceAssignment($enforceUserServiceAssignment)
    {
        $this->enforceUserServiceAssignment = $enforceUserServiceAssignment;
        return $this;
    }


}

