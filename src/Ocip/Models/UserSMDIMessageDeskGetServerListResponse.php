<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskGetServerListResponse
 *
 * Response to the UserSMDIMessageDeskGetServerListRequest.
 *         The SMDI Server table column headings are: "Device Name", "Net Address",
 * "Port".
 *
 * @see UserSMDIMessageDeskGetServerListRequest
 */
class UserSMDIMessageDeskGetServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName smdiServerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $smdiServerTable = null;

    /**
     * Getter for smdiServerTable
     *
     * @ElementName smdiServerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSmdiServerTable()
    {
        return $this->smdiServerTable;
    }

    /**
     * Setter for smdiServerTable
     *
     * @ElementName smdiServerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $smdiServerTable
     * @return $this
     */
    public function setSmdiServerTable($smdiServerTable)
    {
        $this->smdiServerTable = $smdiServerTable;
        return $this;
    }


}

