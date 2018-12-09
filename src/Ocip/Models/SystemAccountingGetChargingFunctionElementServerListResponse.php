<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingGetChargingFunctionElementServerListResponse
 *
 * Response to SystemAccountingGetChargingFunctionElementServerListRequest. The accounting charging function element Server table column
 *         headings are: "Address", "Extended Net Address", "Type", "Description".
 *
 * @see SystemAccountingGetChargingFunctionElementServerListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:1453","type":"sequence"}]
 */
class SystemAccountingGetChargingFunctionElementServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName chargingFunctionElementServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:1453
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $chargingFunctionElementServerTable = null;

    /**
     * Getter for chargingFunctionElementServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getChargingFunctionElementServerTable()
    {
        return $this->chargingFunctionElementServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->chargingFunctionElementServerTable;
    }

    /**
     * Setter for chargingFunctionElementServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $chargingFunctionElementServerTable
     * @return $this
     */
    public function setChargingFunctionElementServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $chargingFunctionElementServerTable)
    {
        $this->chargingFunctionElementServerTable = $chargingFunctionElementServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChargingFunctionElementServerTable()
    {
        $this->chargingFunctionElementServerTable = null;
        return $this;
    }


}

