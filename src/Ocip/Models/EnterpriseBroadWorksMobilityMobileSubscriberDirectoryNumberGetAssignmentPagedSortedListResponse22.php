<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListResponse22
 *
 * Response to EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest22.
 *         The response contains the number of entries that would be returned if the response was not page size restricted.
 *         Contains a table with columns: "Mobile Number", "User Id", "Last Name", "First Name", "Phone Number", "Extension", 
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
 *
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest22
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:202","type":"sequence"}]
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:202
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName mobileSubscriberDirectoryNumbersAssignmentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:202
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mobileSubscriberDirectoryNumbersAssignmentTable = null;

    /**
     * Getter for totalNumberOfRows
     *
     * @return int
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @param int $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalNumberOfRows()
    {
        $this->totalNumberOfRows = null;
        return $this;
    }

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

