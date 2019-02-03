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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1680","type":"sequence"}]
 */
class SystemAdminGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemAdminTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1680
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

