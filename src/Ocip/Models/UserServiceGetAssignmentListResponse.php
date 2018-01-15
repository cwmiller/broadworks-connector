<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserServiceGetAssignmentListResponse
 *
 * Response to UserServiceGetAssignmentListRequest.
 *         Contains two tables, one for the service packs, and one for the user
 * services.
 *         The user table has the column headings: "Service Name", "Assigned",
 *         The service pack table's column headings are: "Service Pack Name",
 * "Assigned", "Description".
 *         The "Assigned" column has either a true or false value
 */
class UserServiceGetAssignmentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName servicePacksAssignmentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $servicePacksAssignmentTable = null;

    /**
     * @ElementName userServicesAssignmentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userServicesAssignmentTable = null;

    /**
     * Getter for servicePacksAssignmentTable
     *
     * @ElementName servicePacksAssignmentTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServicePacksAssignmentTable()
    {
        return $this->servicePacksAssignmentTable;
    }

    /**
     * Setter for servicePacksAssignmentTable
     *
     * @ElementName servicePacksAssignmentTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $servicePacksAssignmentTable
     * @return $this
     */
    public function setServicePacksAssignmentTable($servicePacksAssignmentTable)
    {
        $this->servicePacksAssignmentTable = $servicePacksAssignmentTable;
        return $this;
    }

    /**
     * Getter for userServicesAssignmentTable
     *
     * @ElementName userServicesAssignmentTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserServicesAssignmentTable()
    {
        return $this->userServicesAssignmentTable;
    }

    /**
     * Setter for userServicesAssignmentTable
     *
     * @ElementName userServicesAssignmentTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userServicesAssignmentTable
     * @return $this
     */
    public function setUserServicesAssignmentTable($userServicesAssignmentTable)
    {
        $this->userServicesAssignmentTable = $userServicesAssignmentTable;
        return $this;
    }


}

