<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceGetAuthorizationListResponse
 *
 * Response to GroupServiceGetAuthorizationListRequest.
 *         Contains three tables, one for the service packs, one for the group services, and one for
 *         the user services.
 *         The user table has the following column headings:
 *           "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Usage", "Licensed", "Allowed", "User Assignable", "Group Service Assignable".
 *         The group service table has the following column headings:
 *           "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Usage", "Licensed", "Allowed", "Instance Count".
 *         The service pack table's column headings are:
 *           "Service Pack Name", "Authorized", "Assigned", "Limited", "Allocated", "Allowed", "Usage", "Description".
 *
 * @see GroupServiceGetAuthorizationListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:7503","type":"sequence"}]
 */
class GroupServiceGetAuthorizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName servicePacksAuthorizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:7503
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $servicePacksAuthorizationTable = null;

    /**
     * @ElementName groupServicesAuthorizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:7503
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $groupServicesAuthorizationTable = null;

    /**
     * @ElementName userServicesAuthorizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:7503
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userServicesAuthorizationTable = null;

    /**
     * Getter for servicePacksAuthorizationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServicePacksAuthorizationTable()
    {
        return $this->servicePacksAuthorizationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePacksAuthorizationTable;
    }

    /**
     * Setter for servicePacksAuthorizationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $servicePacksAuthorizationTable
     * @return $this
     */
    public function setServicePacksAuthorizationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $servicePacksAuthorizationTable)
    {
        $this->servicePacksAuthorizationTable = $servicePacksAuthorizationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePacksAuthorizationTable()
    {
        $this->servicePacksAuthorizationTable = null;
        return $this;
    }

    /**
     * Getter for groupServicesAuthorizationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupServicesAuthorizationTable()
    {
        return $this->groupServicesAuthorizationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupServicesAuthorizationTable;
    }

    /**
     * Setter for groupServicesAuthorizationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupServicesAuthorizationTable
     * @return $this
     */
    public function setGroupServicesAuthorizationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupServicesAuthorizationTable)
    {
        $this->groupServicesAuthorizationTable = $groupServicesAuthorizationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupServicesAuthorizationTable()
    {
        $this->groupServicesAuthorizationTable = null;
        return $this;
    }

    /**
     * Getter for userServicesAuthorizationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserServicesAuthorizationTable()
    {
        return $this->userServicesAuthorizationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServicesAuthorizationTable;
    }

    /**
     * Setter for userServicesAuthorizationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServicesAuthorizationTable
     * @return $this
     */
    public function setUserServicesAuthorizationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServicesAuthorizationTable)
    {
        $this->userServicesAuthorizationTable = $userServicesAuthorizationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServicesAuthorizationTable()
    {
        $this->userServicesAuthorizationTable = null;
        return $this;
    }
}

