<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskGetServerRouteListResponse
 *
 * Response to SystemSMDIMessageDeskGetServerRouteListRequest.
 *         The SMDI Server route table column headings are: "Destination" and "SMDI Servers".
 *
 * @see SystemSMDIMessageDeskGetServerRouteListRequest
 * @Groups [{"id":"ee7bb69368e23a56a82c5d9cf07b5433:164","type":"sequence"}]
 */
class SystemSMDIMessageDeskGetServerRouteListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName smdiServerRouteTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ee7bb69368e23a56a82c5d9cf07b5433:164
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $smdiServerRouteTable = null;

    /**
     * Getter for smdiServerRouteTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSmdiServerRouteTable()
    {
        return $this->smdiServerRouteTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->smdiServerRouteTable;
    }

    /**
     * Setter for smdiServerRouteTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $smdiServerRouteTable
     * @return $this
     */
    public function setSmdiServerRouteTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $smdiServerRouteTable)
    {
        $this->smdiServerRouteTable = $smdiServerRouteTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSmdiServerRouteTable()
    {
        $this->smdiServerRouteTable = null;
        return $this;
    }


}

