<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse
 *
 * Response to the
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest.
 *         The response contains a table with columns: "Mobile Number", "User Id",
 *         "Last Name", "First Name","Phone Number", "Extension", "Department",.
 *         The "Mobile Number" column contains a single DN.
 *         The "User Id", "Last Name" and "First Name" columns contains the
 * corresponding attributes of the user possessing the DN(s).
 *         The "Phone Number" column contains a single DN.
 *         The "Department" column contains the department of the user if it is
 * part of a department.
 *
 * @see
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest
 */
class GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileSubscriberDirectoryNumberTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mobileSubscriberDirectoryNumberTable = null;

    /**
     * Getter for mobileSubscriberDirectoryNumberTable
     *
     * @ElementName mobileSubscriberDirectoryNumberTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMobileSubscriberDirectoryNumberTable()
    {
        return $this->mobileSubscriberDirectoryNumberTable;
    }

    /**
     * Setter for mobileSubscriberDirectoryNumberTable
     *
     * @ElementName mobileSubscriberDirectoryNumberTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $mobileSubscriberDirectoryNumberTable
     * @return $this
     */
    public function setMobileSubscriberDirectoryNumberTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileSubscriberDirectoryNumberTable)
    {
        $this->mobileSubscriberDirectoryNumberTable = $mobileSubscriberDirectoryNumberTable;
        return $this;
    }


}

