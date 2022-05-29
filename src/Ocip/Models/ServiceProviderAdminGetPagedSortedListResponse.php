<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPagedSortedListResponse
 *
 * Response to ServiceProviderAdminGetPagedSortedListRequest.
 *         Contains a 7 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Administrator Type", "Language", "Locale" and "Encoding".  
 *         The following columns are only returned in AS data mode:
 *         "Locale" and "Encoding".
 *
 * @see ServiceProviderAdminGetPagedSortedListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:1442","type":"sequence"}]
 */
class ServiceProviderAdminGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderAdminTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1442
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $serviceProviderAdminTable = null;

    /**
     * Getter for serviceProviderAdminTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceProviderAdminTable()
    {
        return $this->serviceProviderAdminTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminTable;
    }

    /**
     * Setter for serviceProviderAdminTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderAdminTable
     * @return $this
     */
    public function setServiceProviderAdminTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceProviderAdminTable)
    {
        $this->serviceProviderAdminTable = $serviceProviderAdminTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminTable()
    {
        $this->serviceProviderAdminTable = null;
        return $this;
    }


}

