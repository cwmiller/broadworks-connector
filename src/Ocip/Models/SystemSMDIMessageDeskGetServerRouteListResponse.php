<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskGetServerRouteListResponse
 *
 * Response to SystemSMDIMessageDeskGetServerRouteListRequest.
 *         The SMDI Server route table column headings are: "Destination" and "SMDI
 * Servers".
 *
 * @see SystemSMDIMessageDeskGetServerRouteListRequest
 */
class SystemSMDIMessageDeskGetServerRouteListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName smdiServerRouteTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $smdiServerRouteTable = null;

    /**
     * Getter for smdiServerRouteTable
     *
     * @ElementName smdiServerRouteTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSmdiServerRouteTable()
    {
        return $this->smdiServerRouteTable;
    }

    /**
     * Setter for smdiServerRouteTable
     *
     * @ElementName smdiServerRouteTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $smdiServerRouteTable
     * @return $this
     */
    public function setSmdiServerRouteTable($smdiServerRouteTable)
    {
        $this->smdiServerRouteTable = $smdiServerRouteTable;
        return $this;
    }


}

