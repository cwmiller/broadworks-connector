<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupServiceGetAuthorizationListResponse
 *
 * Response to GroupServiceGetAuthorizationListRequest.
 *         Contains three tables, one for the service packs, one for the group
 * services, and one for
 *         the user services.
 *         The user table has the following column headings:
 *           "Service Name", "Authorized", "Assigned", "Limited", "Quantity",
 * "Usage", "Licensed", "Allowed", "User Assignable", "Group Service Assignable".
 *         The group service table has the following column headings:
 *           "Service Name", "Authorized", "Assigned", "Limited", "Quantity",
 * "Usage", "Licensed", "Allowed", "Instance Count".
 *         The service pack table's column headings are:
 *           "Service Pack Name", "Authorized", "Assigned", "Limited", "Allocated",
 * "Allowed", "Usage", "Description".
 *
 * @see GroupServiceGetAuthorizationListRequest
 */
class GroupServiceGetAuthorizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName servicePacksAuthorizationTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $servicePacksAuthorizationTable = null;

    /**
     * @ElementName groupServicesAuthorizationTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupServicesAuthorizationTable = null;

    /**
     * @ElementName userServicesAuthorizationTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userServicesAuthorizationTable = null;

    /**
     * Getter for servicePacksAuthorizationTable
     *
     * @ElementName servicePacksAuthorizationTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServicePacksAuthorizationTable()
    {
        return $this->servicePacksAuthorizationTable;
    }

    /**
     * Setter for servicePacksAuthorizationTable
     *
     * @ElementName servicePacksAuthorizationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $servicePacksAuthorizationTable
     * @return $this
     */
    public function setServicePacksAuthorizationTable($servicePacksAuthorizationTable)
    {
        $this->servicePacksAuthorizationTable = $servicePacksAuthorizationTable;
        return $this;
    }

    /**
     * Getter for groupServicesAuthorizationTable
     *
     * @ElementName groupServicesAuthorizationTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupServicesAuthorizationTable()
    {
        return $this->groupServicesAuthorizationTable;
    }

    /**
     * Setter for groupServicesAuthorizationTable
     *
     * @ElementName groupServicesAuthorizationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupServicesAuthorizationTable
     * @return $this
     */
    public function setGroupServicesAuthorizationTable($groupServicesAuthorizationTable)
    {
        $this->groupServicesAuthorizationTable = $groupServicesAuthorizationTable;
        return $this;
    }

    /**
     * Getter for userServicesAuthorizationTable
     *
     * @ElementName userServicesAuthorizationTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserServicesAuthorizationTable()
    {
        return $this->userServicesAuthorizationTable;
    }

    /**
     * Setter for userServicesAuthorizationTable
     *
     * @ElementName userServicesAuthorizationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userServicesAuthorizationTable
     * @return $this
     */
    public function setUserServicesAuthorizationTable($userServicesAuthorizationTable)
    {
        $this->userServicesAuthorizationTable = $userServicesAuthorizationTable;
        return $this;
    }


}

