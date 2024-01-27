<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse
 *
 * Response to EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest.
 *         The response contains a table with columns: "Mobile Number", "User Id",
 *         "Last Name", "First Name","Phone Number","Extension", "Group Id", "Department" and "Mobile Network".
 *         The "Mobile Number" column contains a single DN.
 *         The "User Id", "Last Name" and "First Name" columns contains the corresponding attributes of the user possessing the DN(s).
 *         The "Phone Number" column contains a single DN.
 *         The "Group Id"   column contains the Group Id of the user.
 *         The "Department" column contains the department of the user if it is part of a department.
 *         The "Mobile Network" column contains the Mobile Network the number belongs to.
 *
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:133","type":"sequence"}]
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mobileSubscriberDirectoryNumbersAssignmentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:133
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

