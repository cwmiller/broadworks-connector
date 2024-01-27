<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetListResponse14
 *
 * Response to ServiceProviderAdminGetListRequest14.
 *         Contains a 7 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Administrator Type", "Language", "Locale" and "Encoding".
 *         
 *         The following columns are only returned in AS data mode:
 *           "Locale" and "Encoding"
 *
 * @see ServiceProviderAdminGetListRequest14
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:1423","type":"sequence"}]
 */
class ServiceProviderAdminGetListResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceProviderAdminTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:1423
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

