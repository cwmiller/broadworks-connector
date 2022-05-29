<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse
 *
 * Response to the GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest.
 *         The response contains a table with columns: "Mobile Number", "User Id",
 *         "Last Name", "First Name","Phone Number", "Extension", "Department",.
 *         The "Mobile Number" column contains a single DN.
 *         The "User Id", "Last Name" and "First Name" columns contains the corresponding attributes of the user possessing the DN(s).
 *         The "Phone Number" column contains a single DN.
 *         The "Department" column contains the department of the user if it is part of a department.
 *
 * @see GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListRequest
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:399","type":"sequence"}]
 */
class GroupBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileSubscriberDirectoryNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:399
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $mobileSubscriberDirectoryNumberTable = null;

    /**
     * Getter for mobileSubscriberDirectoryNumberTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMobileSubscriberDirectoryNumberTable()
    {
        return $this->mobileSubscriberDirectoryNumberTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileSubscriberDirectoryNumberTable;
    }

    /**
     * Setter for mobileSubscriberDirectoryNumberTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileSubscriberDirectoryNumberTable
     * @return $this
     */
    public function setMobileSubscriberDirectoryNumberTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileSubscriberDirectoryNumberTable)
    {
        $this->mobileSubscriberDirectoryNumberTable = $mobileSubscriberDirectoryNumberTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileSubscriberDirectoryNumberTable()
    {
        $this->mobileSubscriberDirectoryNumberTable = null;
        return $this;
    }


}

