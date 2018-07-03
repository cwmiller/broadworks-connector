<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetAssignedServiceProviderListRequest
 *
 * Request a list of service providers that have a given Office Zone assigned.  The
 * response is either a SystemOfficeZoneGetAssignedServiceProviderListResponse or
 * ErrorResponse.
 *
 * @see SystemOfficeZoneGetAssignedServiceProviderListResponse
 * @see ErrorResponse
 */
class SystemOfficeZoneGetAssignedServiceProviderListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName officeZoneName
     * @var string|null
     */
    private $officeZoneName = null;

    /**
     * Getter for officeZoneName
     *
     * @ElementName officeZoneName
     * @return string|null
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName;
    }

    /**
     * Setter for officeZoneName
     *
     * @ElementName officeZoneName
     * @param string|null $officeZoneName
     * @return $this
     */
    public function setOfficeZoneName($officeZoneName)
    {
        $this->officeZoneName = $officeZoneName;
        return $this;
    }


}

