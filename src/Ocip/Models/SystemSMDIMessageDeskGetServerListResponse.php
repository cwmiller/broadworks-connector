<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskGetServerListResponse
 *
 * Response to SystemMediaServerGetListRequest. The SMDI Server table column
 *         headings are: "Device Name", "Net Address", "Port" and "Description".
 *
 * @see SystemMediaServerGetListRequest
 */
class SystemSMDIMessageDeskGetServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName smdiServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $smdiServerTable = null;

    /**
     * Getter for smdiServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSmdiServerTable()
    {
        return $this->smdiServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->smdiServerTable;
    }

    /**
     * Setter for smdiServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $smdiServerTable
     * @return $this
     */
    public function setSmdiServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $smdiServerTable)
    {
        $this->smdiServerTable = $smdiServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSmdiServerTable()
    {
        $this->smdiServerTable = null;
        return $this;
    }


}

