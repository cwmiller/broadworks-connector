<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHPBXAlternateCarrierSelectionGetCarrierListResponse
 *
 * Response to the SystemHPBXAlternateCarrierSelectionGetCarrierListRequest.
 *         Contains a table with column headings: 
 *          "Carrier Name", "Carrier Prefix", "Carrier Domain", "Carrier Type"
 *         The possible values for Carrier Type are "Local And Distant" and "Distant".
 *
 * @see SystemHPBXAlternateCarrierSelectionGetCarrierListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:9664","type":"sequence"}]
 */
class SystemHPBXAlternateCarrierSelectionGetCarrierListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName HPBXAlternateCarriersTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:9664
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $HPBXAlternateCarriersTable = null;

    /**
     * Getter for HPBXAlternateCarriersTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getHPBXAlternateCarriersTable()
    {
        return $this->HPBXAlternateCarriersTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->HPBXAlternateCarriersTable;
    }

    /**
     * Setter for HPBXAlternateCarriersTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $HPBXAlternateCarriersTable
     * @return $this
     */
    public function setHPBXAlternateCarriersTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $HPBXAlternateCarriersTable)
    {
        $this->HPBXAlternateCarriersTable = $HPBXAlternateCarriersTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHPBXAlternateCarriersTable()
    {
        $this->HPBXAlternateCarriersTable = null;
        return $this;
    }


}

