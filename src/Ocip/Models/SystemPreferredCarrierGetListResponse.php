<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierGetListResponse
 *
 * Response to a SystemPreferredCarrierGetListRequest. Contains a table with one
 * row per carrier.
 *         The table columns are: "Carrier", "Country Code", "CIC", "Is
 * Intra-Lata", "Is Inter-Lata", "Is International".
 *         The value in the "Is Intra-Lata", "Is Inter-Lata", and "Is
 * International" columns is one of "true" or "false".
 *
 * @see SystemPreferredCarrierGetListRequest
 */
class SystemPreferredCarrierGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName systemCarrierTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $systemCarrierTable = null;

    /**
     * Getter for systemCarrierTable
     *
     * @ElementName systemCarrierTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSystemCarrierTable()
    {
        return $this->systemCarrierTable;
    }

    /**
     * Setter for systemCarrierTable
     *
     * @ElementName systemCarrierTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $systemCarrierTable
     * @return $this
     */
    public function setSystemCarrierTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $systemCarrierTable)
    {
        $this->systemCarrierTable = $systemCarrierTable;
        return $this;
    }


}

