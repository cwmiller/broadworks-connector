<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiPolicyProfileGetAssignedServiceProviderListResponse
 *
 * Response to SystemXsiPolicyProfileUsageGetListRequest.
 *         Contains a table with column headings: "Organization ID", "Organization Name", "Organization Type" and "Reseller Id".
 *
 * @see SystemXsiPolicyProfileUsageGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19811","type":"sequence"}]
 */
class SystemXsiPolicyProfileGetAssignedServiceProviderListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName spTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:19811
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $spTable = null;

    /**
     * Getter for spTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSpTable()
    {
        return $this->spTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->spTable;
    }

    /**
     * Setter for spTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $spTable
     * @return $this
     */
    public function setSpTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $spTable)
    {
        $this->spTable = $spTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSpTable()
    {
        $this->spTable = null;
        return $this;
    }
}

