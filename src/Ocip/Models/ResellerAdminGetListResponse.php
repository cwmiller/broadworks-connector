<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminGetListResponse
 *
 * Response to ResellerAdminGetListRequest.
 *         Contains a 4 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Language".
 */
class ResellerAdminGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName resellerAdminTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $resellerAdminTable = null;

    /**
     * Getter for resellerAdminTable
     *
     * @ElementName resellerAdminTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getResellerAdminTable()
    {
        return $this->resellerAdminTable;
    }

    /**
     * Setter for resellerAdminTable
     *
     * @ElementName resellerAdminTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $resellerAdminTable
     * @return $this
     */
    public function setResellerAdminTable($resellerAdminTable)
    {
        $this->resellerAdminTable = $resellerAdminTable;
        return $this;
    }


}

