<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierGetGroupListResponse
 *
 * Response to a SystemPreferredCarrierGetGroupListRequest.
 *         Contains a table with one row per group.
 *         The table columns are: "Group Id", "Group Name", "Organization Id", "Organization Type".
 *         The "Organization Id" column is populated with either a service provider Id or an enterprise Id.
 *         The "Organization Type" column is populated with one of the enumerated strings defined in the
 *         OrganizationType OCI data type.  Please see OCISchemaDataTypes.xsd for details on OrganizationType.
 *
 * @see SystemPreferredCarrierGetGroupListRequest
 * @Groups [{"id":"1384777ce7bd407156102bad44751987:385","type":"sequence"}]
 */
class SystemPreferredCarrierGetGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupsUsingCarrierTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 1384777ce7bd407156102bad44751987:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupsUsingCarrierTable = null;

    /**
     * Getter for groupsUsingCarrierTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupsUsingCarrierTable()
    {
        return $this->groupsUsingCarrierTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupsUsingCarrierTable;
    }

    /**
     * Setter for groupsUsingCarrierTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupsUsingCarrierTable
     * @return $this
     */
    public function setGroupsUsingCarrierTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupsUsingCarrierTable)
    {
        $this->groupsUsingCarrierTable = $groupsUsingCarrierTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupsUsingCarrierTable()
    {
        $this->groupsUsingCarrierTable = null;
        return $this;
    }


}

