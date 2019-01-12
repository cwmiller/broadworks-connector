<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetListResponse
 *
 * Response to GroupAdminGetListRequest.
 *         Contains a 7 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Department", "Language", "Locale" and "Encoding".
 *         
 *         The following columns are only returned in AS data mode:
 *           "Locale" and "Encoding"
 *
 * @see GroupAdminGetListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:1114","type":"sequence"}]
 */
class GroupAdminGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupAdminTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1114
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $groupAdminTable = null;

    /**
     * Getter for groupAdminTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupAdminTable()
    {
        return $this->groupAdminTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminTable;
    }

    /**
     * Setter for groupAdminTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupAdminTable
     * @return $this
     */
    public function setGroupAdminTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupAdminTable)
    {
        $this->groupAdminTable = $groupAdminTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminTable()
    {
        $this->groupAdminTable = null;
        return $this;
    }


}

