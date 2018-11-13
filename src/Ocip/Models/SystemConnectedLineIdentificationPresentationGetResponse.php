<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConnectedLineIdentificationPresentationGetResponse
 *
 * Response to SystemConnectedLineIdentificationPresentationGetRequest.
 *
 * @see SystemConnectedLineIdentificationPresentationGetRequest
 */
class SystemConnectedLineIdentificationPresentationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enforceUserServiceAssignment
     * @Type bool
     * @var bool|null
     */
    private $enforceUserServiceAssignment = null;

    /**
     * Getter for enforceUserServiceAssignment
     *
     * @return bool
     */
    public function getEnforceUserServiceAssignment()
    {
        return $this->enforceUserServiceAssignment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceUserServiceAssignment;
    }

    /**
     * Setter for enforceUserServiceAssignment
     *
     * @param bool $enforceUserServiceAssignment
     * @return $this
     */
    public function setEnforceUserServiceAssignment($enforceUserServiceAssignment)
    {
        $this->enforceUserServiceAssignment = $enforceUserServiceAssignment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceUserServiceAssignment()
    {
        $this->enforceUserServiceAssignment = null;
        return $this;
    }


}

