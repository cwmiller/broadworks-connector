<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetListInSystemResponse
 *
 * Response to GroupGetListInSystemRequest.
 *         Contains a table with column headings: "Group Id", "Group Name", "User Limit", "Organization Id", "Organization Type", "Reseller Id" 
 *         and a row for each group.
 *         The "Organization Id" column is populated with either a service provider Id or an enterprise Id.
 *         The "Organization Type" column is populated with one of the enumerated strings defined in the
 *         OrganizationType OCI data type.  Please see OCISchemaDataTypes.xsd for details on OrganizationType.
 *         
 *         The following columns are only returned in AS data mode:       
 *           Reseller Id
 *
 * @see GroupGetListInSystemRequest
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:4944","type":"sequence"}]
 */
class GroupGetListInSystemResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:4944
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupTable = null;

    /**
     * Getter for groupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupTable()
    {
        return $this->groupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupTable;
    }

    /**
     * Setter for groupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable
     * @return $this
     */
    public function setGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable)
    {
        $this->groupTable = $groupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupTable()
    {
        $this->groupTable = null;
        return $this;
    }


}

