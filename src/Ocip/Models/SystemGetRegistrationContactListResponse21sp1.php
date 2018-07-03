<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetRegistrationContactListResponse21sp1
 *
 * Response to SystemGetRegistrationContactListRequest. The table columns are:
 * "Service Provider Id", "Group Id", "User Id", "Line/Port", 
 *         "Endpoint Type", "Order", "URI", "Expiration", "Contact", "Device
 * Level", "Device Name", "Public Net Address", 
 *         "Public Port", "Private Net Address", "Private Port", "User Agent",
 * "Reseller Id".
 *         The Endpoint Type column contains one of the enumerated
 * RegistrationEndpointType21sp1 values.
 *         The value Mobility in Endpoint Type column is only applicable in AS data
 * mode.
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemGetRegistrationContactListRequest
 */
class SystemGetRegistrationContactListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName registrationTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $registrationTable = null;

    /**
     * Getter for registrationTable
     *
     * @ElementName registrationTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getRegistrationTable()
    {
        return $this->registrationTable;
    }

    /**
     * Setter for registrationTable
     *
     * @ElementName registrationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $registrationTable
     * @return $this
     */
    public function setRegistrationTable($registrationTable)
    {
        $this->registrationTable = $registrationTable;
        return $this;
    }


}

