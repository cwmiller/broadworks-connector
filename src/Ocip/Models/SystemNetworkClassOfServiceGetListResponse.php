<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetListResponse
 *
 * Response to the SystemNetworkClassOfServiceGetListRequest.
 *         The response contains a table of all Network Classes of Service
 *         in the system. The column headings are "Name" and "Description"
 *
 * @see SystemNetworkClassOfServiceGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12677","type":"sequence"}]
 */
class SystemNetworkClassOfServiceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName networkClassOfServiceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:12677
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $networkClassOfServiceTable = null;

    /**
     * Getter for networkClassOfServiceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getNetworkClassOfServiceTable()
    {
        return $this->networkClassOfServiceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfServiceTable;
    }

    /**
     * Setter for networkClassOfServiceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkClassOfServiceTable
     * @return $this
     */
    public function setNetworkClassOfServiceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $networkClassOfServiceTable)
    {
        $this->networkClassOfServiceTable = $networkClassOfServiceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfServiceTable()
    {
        $this->networkClassOfServiceTable = null;
        return $this;
    }
}

