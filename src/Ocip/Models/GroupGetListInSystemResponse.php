<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetListInSystemResponse
 *
 * Response to GroupGetListInSystemRequest.
 *         Contains a table with column headings: "Group Id", "Group Name", "User
 * Limit", "Organization Id", "Organization Type"
 *         and a row for each group.
 *         The "Organization Id" column is populated with either a service provider
 * Id or an enterprise Id.
 *         The "Organization Type" column is populated with one of the enumerated
 * strings defined in the
 *         OrganizationType OCI data type.  Please see OCISchemaDataTypes.xsd for
 * details on OrganizationType.
 */
class GroupGetListInSystemResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupTable = null;

    /**
     * Getter for groupTable
     *
     * @ElementName groupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupTable()
    {
        return $this->groupTable;
    }

    /**
     * Setter for groupTable
     *
     * @ElementName groupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupTable
     * @return $this
     */
    public function setGroupTable($groupTable)
    {
        $this->groupTable = $groupTable;
        return $this;
    }


}

