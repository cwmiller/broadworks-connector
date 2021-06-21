<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCollectCallPrefixDigitsGetListResponse
 *
 * Response to the SystemAutomaticCollectCallPrefixDigitsGetListRequest.
 *         Contains a table with column headings: "Country Code", "Prefix".
 *
 * @see SystemAutomaticCollectCallPrefixDigitsGetListRequest
 * @Groups [{"id":"af1b47d7cab3335a81456e64e42371b0:144","type":"sequence"}]
 */
class SystemAutomaticCollectCallPrefixDigitsGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefixTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group af1b47d7cab3335a81456e64e42371b0:144
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $prefixTable = null;

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

