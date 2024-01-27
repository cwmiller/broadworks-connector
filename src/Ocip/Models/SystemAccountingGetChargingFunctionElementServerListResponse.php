<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingGetChargingFunctionElementServerListResponse
 *
 * Response to SystemAccountingGetChargingFunctionElementServerListRequest. The accounting charging function element Server table column
 *         headings are: "Address", "Extended Net Address", "Type", "Description".
 *
 * @see SystemAccountingGetChargingFunctionElementServerListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1943","type":"sequence"}]
 */
class SystemAccountingGetChargingFunctionElementServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName chargingFunctionElementServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:1943
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $chargingFunctionElementServerTable = null;

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

