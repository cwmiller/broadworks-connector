<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTrunkGroupUserCreationTaskGetListResponse14sp4
 *
 * Response to SystemTrunkGroupUserCreationTaskGetListRequest14sp4.
 *         Contains a table with a row for each user creation task and column
 * headings :
 *         "Trunk Group Name", "Group Id", "Organization Id", "Organization Type",
 * "Name", "Status", "Users Created", "Total Users To Create", "Error Count".
 *         The "Organization Id" column is populated with either a service provider
 * Id or an enterprise Id.
 *         The "Organization Type" column is populated with one of the enumerated
 * strings defined in the
 *         OrganizationType OCI data type.  Please see OCISchemaDataTypes.xsd for
 * details on OrganizationType.
 */
class SystemTrunkGroupUserCreationTaskGetListResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName taskTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $taskTable = null;

    /**
     * Getter for taskTable
     *
     * @ElementName taskTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTaskTable()
    {
        return $this->taskTable;
    }

    /**
     * Setter for taskTable
     *
     * @ElementName taskTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $taskTable
     * @return $this
     */
    public function setTaskTable($taskTable)
    {
        $this->taskTable = $taskTable;
        return $this;
    }


}
