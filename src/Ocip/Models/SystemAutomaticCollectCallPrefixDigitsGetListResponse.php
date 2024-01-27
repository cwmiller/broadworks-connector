<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCollectCallPrefixDigitsGetListResponse
 *
 * Response to the SystemAutomaticCollectCallPrefixDigitsGetListRequest.
 *         Contains a table with column headings: "Country Code", "Prefix".
 *
 * @see SystemAutomaticCollectCallPrefixDigitsGetListRequest
 * @Groups [{"id":"0d5db1a19a0aeda6f13d1f1c609efa0a:144","type":"sequence"}]
 */
class SystemAutomaticCollectCallPrefixDigitsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName prefixTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 0d5db1a19a0aeda6f13d1f1c609efa0a:144
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $prefixTable = null;

    /**
     * Getter for prefixTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPrefixTable()
    {
        return $this->prefixTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixTable;
    }

    /**
     * Setter for prefixTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $prefixTable
     * @return $this
     */
    public function setPrefixTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $prefixTable)
    {
        $this->prefixTable = $prefixTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefixTable()
    {
        $this->prefixTable = null;
        return $this;
    }
}

