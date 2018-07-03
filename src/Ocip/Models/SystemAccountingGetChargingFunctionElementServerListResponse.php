<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingGetChargingFunctionElementServerListResponse
 *
 * Response to SystemAccountingGetChargingFunctionElementServerListRequest. The
 * accounting charging function element Server table column
 *         headings are: "Address", "Extended Net Address", "Type", "Description".
 *
 * @see SystemAccountingGetChargingFunctionElementServerListRequest
 */
class SystemAccountingGetChargingFunctionElementServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName chargingFunctionElementServerTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $chargingFunctionElementServerTable = null;

    /**
     * Getter for chargingFunctionElementServerTable
     *
     * @ElementName chargingFunctionElementServerTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getChargingFunctionElementServerTable()
    {
        return $this->chargingFunctionElementServerTable;
    }

    /**
     * Setter for chargingFunctionElementServerTable
     *
     * @ElementName chargingFunctionElementServerTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $chargingFunctionElementServerTable
     * @return $this
     */
    public function setChargingFunctionElementServerTable($chargingFunctionElementServerTable)
    {
        $this->chargingFunctionElementServerTable = $chargingFunctionElementServerTable;
        return $this;
    }


}

