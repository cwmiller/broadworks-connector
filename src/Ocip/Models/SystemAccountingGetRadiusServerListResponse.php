<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingGetRadiusServerListResponse
 *
 * Response to SystemAccountingGetRadiusServerListRequest. The Radius Server table
 *         column headings are: "Net Address", "Port", "Description"
 *
 * @see SystemAccountingGetRadiusServerListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1974","type":"sequence"}]
 */
class SystemAccountingGetRadiusServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName radiusServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:1974
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $radiusServerTable = null;

    /**
     * Getter for radiusServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRadiusServerTable()
    {
        return $this->radiusServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->radiusServerTable;
    }

    /**
     * Setter for radiusServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $radiusServerTable
     * @return $this
     */
    public function setRadiusServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $radiusServerTable)
    {
        $this->radiusServerTable = $radiusServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRadiusServerTable()
    {
        $this->radiusServerTable = null;
        return $this;
    }
}

