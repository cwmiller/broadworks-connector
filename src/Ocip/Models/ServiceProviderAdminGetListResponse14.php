<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetListResponse14
 *
 * Response to ServiceProviderAdminGetListRequest14.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Administrator Type", "Language".
 */
class ServiceProviderAdminGetListResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderAdminTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $serviceProviderAdminTable = null;

    /**
     * Getter for serviceProviderAdminTable
     *
     * @ElementName serviceProviderAdminTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getServiceProviderAdminTable()
    {
        return $this->serviceProviderAdminTable;
    }

    /**
     * Setter for serviceProviderAdminTable
     *
     * @ElementName serviceProviderAdminTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $serviceProviderAdminTable
     * @return $this
     */
    public function setServiceProviderAdminTable($serviceProviderAdminTable)
    {
        $this->serviceProviderAdminTable = $serviceProviderAdminTable;
        return $this;
    }


}
