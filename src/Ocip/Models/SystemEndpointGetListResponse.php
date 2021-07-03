<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEndpointGetListResponse
 *
 * Response to SystemEndpointGetListRequest.
 *         The column headings for the endpointTable are: "Organization Id", "Organization Type", "Group Id", "Line/Port", "Last Name","First Name", "User Id", "User Type", "Phone Number", "Extension", "Device Type", "Device Name", "Net Address", "MAC Address", "Department", "Email Address", "Reseller Id".
 *         Possible values for User Type are "User", "CCBasic", "CCStandard", "CCPremium", "RP", "MOH", "MOHVideo".
 *         
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemEndpointGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9782","type":"sequence"}]
 */
class SystemEndpointGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName endpointTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9782
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $endpointTable = null;

    /**
     * Getter for endpointTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getEndpointTable()
    {
        return $this->endpointTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointTable;
    }

    /**
     * Setter for endpointTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $endpointTable
     * @return $this
     */
    public function setEndpointTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $endpointTable)
    {
        $this->endpointTable = $endpointTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpointTable()
    {
        $this->endpointTable = null;
        return $this;
    }


}

