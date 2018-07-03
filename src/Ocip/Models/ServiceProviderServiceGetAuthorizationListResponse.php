<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceGetAuthorizationListResponse
 *
 * Response to ServiceProviderServiceGetAuthorizationListRequest.
 *         Contains two tables, one for the group services and one for the user
 * services.
 *         The Group Service table has column headings:
 *         "Service Name", "Authorized", "Assigned", "Limited", "Quantity",
 * "Allocated", "Licensed", "Service Pack Allocation"
 *         The User Service table has column headings:
 *         "Service Name", "Authorized", "Assigned", "Limited", "Quantity",
 * "Allocated", "Licensed", "Service Pack Allocation", "User Assignable", "Service
 * Pack Assignable".
 *
 * @see ServiceProviderServiceGetAuthorizationListRequest
 */
class ServiceProviderServiceGetAuthorizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

