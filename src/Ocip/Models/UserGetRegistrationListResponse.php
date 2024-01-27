<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRegistrationListResponse
 *
 * Response to UserGetRegistrationListRequest.
 *         
 *         The registrationTable table column headings are:
 *           "Device Level", "Device Name", "Order", "URI", "Expiration", "Line/Port", "Endpoint Type", "Public Net Address", "Public Port", "Private Net Address", "Private Port", "User Agent", "Lockout Started", "Lockout Expires", "Lockout Count", "Access Info",
 *           "Private Identity", "SIP Instance ID", "Supports Only CS Media", "Feature Parameters", "Supports Voice Over PS", "Path Header", "Registration Active", "P-Access-Network-Info"
 *         The following columns are only used in AS data mode:
 *           "Order", "Public Net Address", "Public Port", "Private Net Address", "Private Port", "Lockout Started", "Lockout Expires", "Lockout Count", "Path Header", "P-Access-Network-Info". 
 *         The following columns are only used in XS data mode:
 *           "Private Identity", "SIP Instance ID", "Supports Only CS Media", "Feature Parameters", "Supports Voice Over PS".
 *         The following columns are only used in AS data mode:
 *           "Registration Active".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *         The expiration column will be empty when the registration is static. In XS data mode, its value will be 0 when the registration is dynamic regardless of the registration's actual expiration date.
 *         The Endpoint Type column contains one of the enumerated EndpointType values.
 *         The Endpoint Type is empty when the registration is against a TELURI.
 *         The table is sorted by: telURI (after SIPURI), Line/Port, static (after dynamic), order.
 *         Lockout times are shown in GMT offset. When a permanent lockout is shown, the "Lockout Expires" column is empty and the "Lockout Count" column contains the word Permanent.
 *
 * @see UserGetRegistrationListRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2102","type":"sequence"}]
 */
class UserGetRegistrationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName registrationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2102
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $registrationTable = null;

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

