<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConnectedLineIdentificationPresentationGetResponse
 *
 * Response to SystemConnectedLineIdentificationPresentationGetRequest.
 */
class SystemConnectedLineIdentificationPresentationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

