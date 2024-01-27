<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListResponse
 *
 * Response to EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest.
 *         The response contains a table with columns: "Mobile Number", "User Id", "Last Name", "First Name", "Phone Number", "Extension", 
 *         "Group Id", "Department", "Department Type", "Parent Department", "Parent Department Type", "Mobile Network", "Country Code", 
 *         "National Prefix", "Available", "Mobile Country Code", "Mobile National Prefix".
 *         The "Mobile Number" column contains a single DN.
 *         The "User Id", "Last Name" and "First Name" columns contains the corresponding attributes of the user possessing the DN(s).
 *         The "Phone Number" column contains a single DN.
 *         The "Group Id" column contains the Group Id of the user.
 *         The "Group Name" column contains the Group Name of the user.
 *         The "Department" column contains the department of the user if it is part of a department.
 *         The "Parent Department" column contains the parent department of the user if it is part of a department.
 *         The "Department Type" and "Parent Department Type" columns will contain the values "Enterprise" or "Group".
 *         The "Mobile Network" column contains the Mobile Network the number belongs to.
 *         The "Country Code" column indicates the dialing prefix for the phone number.
 *         The "National Prefix" column indicates the digit sequence to be dialed before the telephone number.
 *         The "Available" column indicates if the Mobile Number is available.
 *         The "Mobile Country Code" column indicates the dialing prefix for the mobile number.
 *         The "Mobile National Prefix" column indicates the digit sequence to be dialed before the mobile number.
 *         Replaced by: EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListResponse22
 *
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListResponse22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:2056","type":"sequence"}]
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mobileSubscriberDirectoryNumbersAssignmentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d8f04177e438f303b41c211e518706bf:2056
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $mobileSubscriberDirectoryNumbersAssignmentTable = null;

    /**
     * Getter for mobileSubscriberDirectoryNumbersAssignmentTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMobileSubscriberDirectoryNumbersAssignmentTable()
    {
        return $this->mobileSubscriberDirectoryNumbersAssignmentTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileSubscriberDirectoryNumbersAssignmentTable;
    }

    /**
     * Setter for mobileSubscriberDirectoryNumbersAssignmentTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileSubscriberDirectoryNumbersAssignmentTable
     * @return $this
     */
    public function setMobileSubscriberDirectoryNumbersAssignmentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileSubscriberDirectoryNumbersAssignmentTable)
    {
        $this->mobileSubscriberDirectoryNumbersAssignmentTable = $mobileSubscriberDirectoryNumbersAssignmentTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileSubscriberDirectoryNumbersAssignmentTable()
    {
        $this->mobileSubscriberDirectoryNumbersAssignmentTable = null;
        return $this;
    }
}

