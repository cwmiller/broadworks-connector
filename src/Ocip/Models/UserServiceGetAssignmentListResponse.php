<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserServiceGetAssignmentListResponse
 *
 * Response to UserServiceGetAssignmentListRequest.
 *         Contains two tables, one for the service packs, and one for the user services.
 *         The user table has the column headings: "Service Name", "Assigned",
 *         The service pack table's column headings are: "Service Pack Name", "Assigned", "Description".
 *         The "Assigned" column has either a true or false value
 *
 * @see UserServiceGetAssignmentListRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3893","type":"sequence"}]
 */
class UserServiceGetAssignmentListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName servicePacksAssignmentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3893
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $servicePacksAssignmentTable = null;

    /**
     * @ElementName userServicesAssignmentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3893
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $userServicesAssignmentTable = null;

    /**
     * Getter for servicePacksAssignmentTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServicePacksAssignmentTable()
    {
        return $this->servicePacksAssignmentTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePacksAssignmentTable;
    }

    /**
     * Setter for servicePacksAssignmentTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $servicePacksAssignmentTable
     * @return $this
     */
    public function setServicePacksAssignmentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $servicePacksAssignmentTable)
    {
        $this->servicePacksAssignmentTable = $servicePacksAssignmentTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePacksAssignmentTable()
    {
        $this->servicePacksAssignmentTable = null;
        return $this;
    }

    /**
     * Getter for userServicesAssignmentTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserServicesAssignmentTable()
    {
        return $this->userServicesAssignmentTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServicesAssignmentTable;
    }

    /**
     * Setter for userServicesAssignmentTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServicesAssignmentTable
     * @return $this
     */
    public function setUserServicesAssignmentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userServicesAssignmentTable)
    {
        $this->userServicesAssignmentTable = $userServicesAssignmentTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServicesAssignmentTable()
    {
        $this->userServicesAssignmentTable = null;
        return $this;
    }
}

