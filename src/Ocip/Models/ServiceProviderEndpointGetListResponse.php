<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEndpointGetListResponse
 *
 * Response to ServiceProviderEndpointGetListRequest.
 *         The column headings for the endpointTable are: 
 *           "Group Id", "Line/Port", "Last Name", "First Name",  "User Id", "User
 * Type", "Phone Number", "Extension", "Device Type", "Device Name", "Net Address",
 * "MAC Address", "Department", "Email Address".
 * 		Possible values for User Type are "User", "CCBasic", "CCStandard",
 * "CCPremium", "RP", "MOH", "MOHVideo".
 *
 * @see ServiceProviderEndpointGetListRequest
 */
class ServiceProviderEndpointGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName endpointTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $endpointTable = null;

    /**
     * Getter for endpointTable
     *
     * @ElementName endpointTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getEndpointTable()
    {
        return $this->endpointTable;
    }

    /**
     * Setter for endpointTable
     *
     * @ElementName endpointTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $endpointTable
     * @return $this
     */
    public function setEndpointTable($endpointTable)
    {
        $this->endpointTable = $endpointTable;
        return $this;
    }


}

