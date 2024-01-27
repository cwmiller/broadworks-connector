<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemServiceDnGetUsageListResponse
 *
 * Response to SystemSystemServiceDnGetUsageListRequest.
 *         The table columns are:  "Phone Number", "Id",
 *         "Name", and "System Service".
 *         The possible values for "System Service" is "System Voice Portal".
 *
 * @see SystemSystemServiceDnGetUsageListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18545","type":"sequence"}]
 */
class SystemSystemServiceDnGetUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dnUtilizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:18545
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $dnUtilizationTable = null;

    /**
     * Getter for dnUtilizationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDnUtilizationTable()
    {
        return $this->dnUtilizationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnUtilizationTable;
    }

    /**
     * Setter for dnUtilizationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnUtilizationTable
     * @return $this
     */
    public function setDnUtilizationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnUtilizationTable)
    {
        $this->dnUtilizationTable = $dnUtilizationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnUtilizationTable()
    {
        $this->dnUtilizationTable = null;
        return $this;
    }
}

