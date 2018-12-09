<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdminGetListResponse
 *
 * Response to SystemAdminGetListRequest.
 *         Contains a 6 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Type", "Read Only", "Language".
 *
 * @see SystemAdminGetListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:1675","type":"sequence"}]
 */
class SystemAdminGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemAdminTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:1675
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $systemAdminTable = null;

    /**
     * Getter for systemAdminTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSystemAdminTable()
    {
        return $this->systemAdminTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemAdminTable;
    }

    /**
     * Setter for systemAdminTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemAdminTable
     * @return $this
     */
    public function setSystemAdminTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemAdminTable)
    {
        $this->systemAdminTable = $systemAdminTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemAdminTable()
    {
        $this->systemAdminTable = null;
        return $this;
    }


}

