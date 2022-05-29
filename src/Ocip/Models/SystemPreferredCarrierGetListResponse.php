<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierGetListResponse
 *
 * Response to a SystemPreferredCarrierGetListRequest. Contains a table with one row per carrier.
 *         The table columns are: "Carrier", "Country Code", "CIC", "Is Intra-Lata", "Is Inter-Lata", "Is International".
 *         The value in the "Is Intra-Lata", "Is Inter-Lata", and "Is International" columns is one of "true" or "false".
 *
 * @see SystemPreferredCarrierGetListRequest
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:417","type":"sequence"}]
 */
class SystemPreferredCarrierGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemCarrierTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 74a46a9bfccb54713c1d19735843f1df:417
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $systemCarrierTable = null;

    /**
     * Getter for systemCarrierTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSystemCarrierTable()
    {
        return $this->systemCarrierTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->systemCarrierTable;
    }

    /**
     * Setter for systemCarrierTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemCarrierTable
     * @return $this
     */
    public function setSystemCarrierTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemCarrierTable)
    {
        $this->systemCarrierTable = $systemCarrierTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSystemCarrierTable()
    {
        $this->systemCarrierTable = null;
        return $this;
    }


}

