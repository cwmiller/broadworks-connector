<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetRegistrationContactListResponse
 *
 * Response to SystemGetRegistrationContactListRequest. The table columns are:
 * "Service Provider Id", "Group Id", "User Id", "Line/Port", 
 *         "Endpoint Type", "Order", "URI", "Expiration", "Contact", "Device
 * Level", "Device Name", "Public Net Address", 
 *         "Public Port", "Private Net Address", "Private Port", "User Agent",
 * "Reseller Id".
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemGetRegistrationContactListRequest
 */
class SystemGetRegistrationContactListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName registrationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $registrationTable = null;

    /**
     * Getter for registrationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRegistrationTable()
    {
        return $this->registrationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->registrationTable;
    }

    /**
     * Setter for registrationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $registrationTable
     * @return $this
     */
    public function setRegistrationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $registrationTable)
    {
        $this->registrationTable = $registrationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegistrationTable()
    {
        $this->registrationTable = null;
        return $this;
    }


}

