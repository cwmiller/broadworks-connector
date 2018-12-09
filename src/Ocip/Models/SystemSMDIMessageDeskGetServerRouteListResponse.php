<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIMessageDeskGetServerRouteListResponse
 *
 * Response to SystemSMDIMessageDeskGetServerRouteListRequest.
 *         The SMDI Server route table column headings are: "Destination" and "SMDI Servers".
 *
 * @see SystemSMDIMessageDeskGetServerRouteListRequest
 * @Groups [{"id":"584e9b2c2c8a6d282376c11d0e3ab848:164","type":"sequence"}]
 */
class SystemSMDIMessageDeskGetServerRouteListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName smdiServerRouteTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 584e9b2c2c8a6d282376c11d0e3ab848:164
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $smdiServerRouteTable = null;

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

