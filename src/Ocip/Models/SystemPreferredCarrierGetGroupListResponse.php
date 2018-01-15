<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierGetGroupListResponse
 *
 * Response to a SystemPreferredCarrierGetGroupListRequest.
 *         Contains a table with one row per group.
 *         The table columns are: "Group Id", "Group Name", "Organization Id",
 * "Organization Type".
 *         The "Organization Id" column is populated with either a service provider
 * Id or an enterprise Id.
 *         The "Organization Type" column is populated with one of the enumerated
 * strings defined in the
 *         OrganizationType OCI data type.  Please see OCISchemaDataTypes.xsd for
 * details on OrganizationType.
 */
class SystemPreferredCarrierGetGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupsUsingCarrierTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupsUsingCarrierTable = null;

    /**
     * Getter for groupsUsingCarrierTable
     *
     * @ElementName groupsUsingCarrierTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupsUsingCarrierTable()
    {
        return $this->groupsUsingCarrierTable;
    }

    /**
     * Setter for groupsUsingCarrierTable
     *
     * @ElementName groupsUsingCarrierTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupsUsingCarrierTable
     * @return $this
     */
    public function setGroupsUsingCarrierTable($groupsUsingCarrierTable)
    {
        $this->groupsUsingCarrierTable = $groupsUsingCarrierTable;
        return $this;
    }


}

