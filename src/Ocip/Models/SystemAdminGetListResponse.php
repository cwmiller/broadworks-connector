<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdminGetListResponse
 *
 * Response to SystemAdminGetListRequest.
 *         Contains a 6 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Type", "Read Only", "Language".
 */
class SystemAdminGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemAdminTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $systemAdminTable = null;

    /**
     * Getter for systemAdminTable
     *
     * @ElementName systemAdminTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSystemAdminTable()
    {
        return $this->systemAdminTable;
    }

    /**
     * Setter for systemAdminTable
     *
     * @ElementName systemAdminTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $systemAdminTable
     * @return $this
     */
    public function setSystemAdminTable($systemAdminTable)
    {
        $this->systemAdminTable = $systemAdminTable;
        return $this;
    }


}

