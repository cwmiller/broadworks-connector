<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRegistrationListResponse
 *
 * Response to UserGetRegistrationListRequest.
 *         The registrationTable table column headings are:
 *           "Device Level", "Device Name", "Order", "URI", "Expiration",
 * "Line/Port", "Endpoint Type"", "Public Net Address", "Public Port", "Private Net
 * Address", "Private Port", "User Agent", "Lockout Started", "Lockout Expires",
 * "Lockout Count".
 *         The "Device Level" column contains one of the AccessDeviceLevel
 * enumerated constants.
 *         The "Line/Port" column in IMS mode can be any Public User Identity which
 * can be either a
 *         SIPURI or a TELURI.
 *         The expiration column will be empty when the registration is static.
 *         The Endpoint Type column contains one of the enumerated EndpointType
 * values.
 *         The Endpoint Type is empty when the registration is against a TELURI.
 *         The table is sorted by: telURI (after SIPURI), Line/Port, static (after
 * dynamic), order.
 *         Lockout times are shown in GMT offset. When a permanent lockout is
 * shown, the "Lockout Expires" column is empty and the "Lockout Count" column
 * contains the word Permanent.
 */
class UserGetRegistrationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

