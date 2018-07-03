<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse
 *
 * Response to
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest.
 *         The response contains a table with columns: "Mobile Number", "User Id",
 *         "Last Name", "First Name","Phone Number","Extension", "Group Id",
 * "Department" and "Mobile Network".
 *         The "Mobile Number" column contains a single DN.
 *         The "User Id", "Last Name" and "First Name" columns contains the
 * corresponding attributes of the user possessing the DN(s).
 *         The "Phone Number" column contains a single DN.
 *         The "Group Id"   column contains the Group Id of the user.
 *         The "Department" column contains the department of the user if it is
 * part of a department.
 *         The "Mobile Network" column contains the Mobile Network the number
 * belongs to.
 *
 * @see
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileSubscriberDirectoryNumbersAssignmentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mobileSubscriberDirectoryNumbersAssignmentTable = null;

    /**
     * Getter for mobileSubscriberDirectoryNumbersAssignmentTable
     *
     * @ElementName mobileSubscriberDirectoryNumbersAssignmentTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMobileSubscriberDirectoryNumbersAssignmentTable()
    {
        return $this->mobileSubscriberDirectoryNumbersAssignmentTable;
    }

    /**
     * Setter for mobileSubscriberDirectoryNumbersAssignmentTable
     *
     * @ElementName mobileSubscriberDirectoryNumbersAssignmentTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $mobileSubscriberDirectoryNumbersAssignmentTable
     * @return $this
     */
    public function setMobileSubscriberDirectoryNumbersAssignmentTable($mobileSubscriberDirectoryNumbersAssignmentTable)
    {
        $this->mobileSubscriberDirectoryNumbersAssignmentTable = $mobileSubscriberDirectoryNumbersAssignmentTable;
        return $this;
    }


}

