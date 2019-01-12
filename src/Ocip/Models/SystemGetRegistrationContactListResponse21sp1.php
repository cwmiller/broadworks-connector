<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetRegistrationContactListResponse21sp1
 *
 * Response to SystemGetRegistrationContactListRequest. The table columns are: "Service Provider Id", "Group Id", "User Id", "Line/Port", 
 *         "Endpoint Type", "Order", "URI", "Expiration", "Contact", "Device Level", "Device Name", "Public Net Address", 
 *         "Public Port", "Private Net Address", "Private Port", "User Agent", "Reseller Id", "Path Header".
 *         The Endpoint Type column contains one of the enumerated RegistrationEndpointType21sp1 values.
 *         The value Mobility in Endpoint Type column is only applicable in AS data mode.
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemGetRegistrationContactListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9281","type":"sequence"}]
 */
class SystemGetRegistrationContactListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName registrationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9281
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

