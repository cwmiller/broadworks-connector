<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceCodeGetListResponse
 *
 * Response to SystemServiceCodeGetListRequest.
 *         Contains a table of defined service codes
 *         The column headings are: "Service Code", and "Description".
 *
 * @see SystemServiceCodeGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16342","type":"sequence"}]
 */
class SystemServiceCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:16342
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $serviceCodeTable = null;

    /**
     * Getter for serviceCodeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceCodeTable()
    {
        return $this->serviceCodeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceCodeTable;
    }

    /**
     * Setter for serviceCodeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceCodeTable
     * @return $this
     */
    public function setServiceCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceCodeTable)
    {
        $this->serviceCodeTable = $serviceCodeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceCodeTable()
    {
        $this->serviceCodeTable = null;
        return $this;
    }
}

