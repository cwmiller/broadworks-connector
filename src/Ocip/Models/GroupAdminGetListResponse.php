<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetListResponse
 *
 * Response to GroupAdminGetListRequest.
 *         Contains a 7 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Department", "Language", "Locale" and
 * "Encoding".
 *         
 *         The following columns are only returned in AS data mode:
 *           "Locale" and "Encoding"
 *
 * @see GroupAdminGetListRequest
 */
class GroupAdminGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupAdminTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupAdminTable = null;

    /**
     * Getter for groupAdminTable
     *
     * @ElementName groupAdminTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getGroupAdminTable()
    {
        return $this->groupAdminTable;
    }

    /**
     * Setter for groupAdminTable
     *
     * @ElementName groupAdminTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $groupAdminTable
     * @return $this
     */
    public function setGroupAdminTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupAdminTable)
    {
        $this->groupAdminTable = $groupAdminTable;
        return $this;
    }


}

