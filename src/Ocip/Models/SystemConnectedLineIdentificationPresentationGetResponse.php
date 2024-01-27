<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConnectedLineIdentificationPresentationGetResponse
 *
 * Response to SystemConnectedLineIdentificationPresentationGetRequest.
 *
 * @see SystemConnectedLineIdentificationPresentationGetRequest
 * @Groups [{"id":"2256aa4d4c7d3679ce18e4f471895147:56","type":"sequence"}]
 */
class SystemConnectedLineIdentificationPresentationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enforceUserServiceAssignment
     * @Type bool
     * @Group 2256aa4d4c7d3679ce18e4f471895147:56
     * @var bool|null
     */
    protected $enforceUserServiceAssignment = null;

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

