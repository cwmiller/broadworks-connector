<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHPBXAlternateCarrierSelectionGetCarrierListResponse
 *
 * Response to the SystemHPBXAlternateCarrierSelectionGetCarrierListRequest.
 *         Contains a table with column headings: 
 *          "Carrier Name", "Carrier Prefix", "Carrier Domain", "Carrier Type"
 *         The possible values for Carrier Type are "Local And Distant" and
 * "Distant".
 */
class SystemHPBXAlternateCarrierSelectionGetCarrierListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName HPBXAlternateCarriersTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $HPBXAlternateCarriersTable = null;

    /**
     * Getter for HPBXAlternateCarriersTable
     *
     * @ElementName HPBXAlternateCarriersTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getHPBXAlternateCarriersTable()
    {
        return $this->HPBXAlternateCarriersTable;
    }

    /**
     * Setter for HPBXAlternateCarriersTable
     *
     * @ElementName HPBXAlternateCarriersTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $HPBXAlternateCarriersTable
     * @return $this
     */
    public function setHPBXAlternateCarriersTable($HPBXAlternateCarriersTable)
    {
        $this->HPBXAlternateCarriersTable = $HPBXAlternateCarriersTable;
        return $this;
    }


}

