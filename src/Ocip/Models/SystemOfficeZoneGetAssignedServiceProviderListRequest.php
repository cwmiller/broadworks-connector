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
     * @Type string
     * @var string|null
     */
    private $officeZoneName = null;

    /**
     * Getter for officeZoneName
     *
     * @return string
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->officeZoneName;
    }

    /**
     * Setter for officeZoneName
     *
     * @param string $officeZoneName
     * @return $this
     */
    public function setOfficeZoneName($officeZoneName)
    {
        $this->officeZoneName = $officeZoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOfficeZoneName()
    {
        $this->officeZoneName = null;
        return $this;
    }


}

