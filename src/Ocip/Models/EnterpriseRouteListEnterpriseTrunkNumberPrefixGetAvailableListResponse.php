<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
 *
 * Response to
 * EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest.
 *         Contains a list of number prefixes that are assigned to an enterprise
 * and still available for assignment to users within the enterprise.
 *         The column headings are "Number Prefix" and "Is Active".
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest
 */
class EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableNumberPrefixTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $availableNumberPrefixTable = null;

    /**
     * Getter for availableNumberPrefixTable
     *
     * @ElementName availableNumberPrefixTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAvailableNumberPrefixTable()
    {
        return $this->availableNumberPrefixTable;
    }

    /**
     * Setter for availableNumberPrefixTable
     *
     * @ElementName availableNumberPrefixTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $availableNumberPrefixTable
     * @return $this
     */
    public function setAvailableNumberPrefixTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableNumberPrefixTable)
    {
        $this->availableNumberPrefixTable = $availableNumberPrefixTable;
        return $this;
    }


}

