<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetRequest
 *
 * Get an existing Office Zone.
 *         The response is either a SystemOfficeZoneGetResponse
 *         or an ErrorResponse.
 */
class SystemOfficeZoneGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

