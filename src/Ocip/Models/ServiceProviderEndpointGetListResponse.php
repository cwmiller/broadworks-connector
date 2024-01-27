<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEndpointGetListResponse
 *
 * Response to ServiceProviderEndpointGetListRequest.
 *         The column headings for the endpointTable are: 
 *           "Group Id", "Line/Port", "Last Name", "First Name",  "User Id", "User Type", "Phone Number", "Extension", "Device Type", "Device Name", "Net Address", "MAC Address", "Department", "Email Address".
 * 		Possible values for User Type are "User", "CCBasic", "CCStandard", "CCPremium", "RP", "MOH", "MOHVideo".
 *
 * @see ServiceProviderEndpointGetListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4204","type":"sequence"}]
 */
class ServiceProviderEndpointGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName endpointTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:4204
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $endpointTable = null;

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

