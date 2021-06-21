<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetAssignmentListResponse18
 *
 * Response to the GroupDnGetAssignmentListRequest18.
 *         The response contains a table with columns: "Phone Numbers", "Department", "Activated", "User Id",
 *         "Last Name", "First Name", "Extension", "Email Address", "User Type", "Country Code", "National Prefix".
 *         The "Phone Numbers" column contains either a single DN or a range of DNs.
 *         The "User Id", "Last Name" and "First Name" columns contains the corresponding attributes of the user possessing the DN(s).
 *         For a service instance, "Last Name" contains the service instance name and "First Name" column contains the corresponding enumerated UserType value.
 *         The "Department" column contains the department of the DN, not the department of the user or service instance.
 *         The "Activated" column indicates if the DN or DN range has been activated.
 *         The "User Type" column contains the corresponding enumerated UserType value.
 *         The "Country Code" column indicates the dialing prefix for the phone number.
 *         The "National Prefix" column indicates the digit sequence to be dialed before the telephone number.        
 *         NOTE: the same phone number can show up in the list twice if the phone number is being used as the group calling line Id.
 *
 * @see GroupDnGetAssignmentListRequest18
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:5075","type":"sequence"}]
 */
class GroupDnGetAssignmentListResponse18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5075
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dnTable = null;

    /**
     * Getter for dnTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDnTable()
    {
        return $this->dnTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnTable;
    }

    /**
     * Setter for dnTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnTable
     * @return $this
     */
    public function setDnTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnTable)
    {
        $this->dnTable = $dnTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnTable()
    {
        $this->dnTable = null;
        return $this;
    }


}

