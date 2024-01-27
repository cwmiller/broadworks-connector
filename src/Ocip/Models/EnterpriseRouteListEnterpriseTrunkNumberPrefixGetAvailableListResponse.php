<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
 *
 * Response to EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest.
 *         Contains a list of number prefixes that are assigned to an enterprise and still available for assignment to users within the enterprise.
 *         The column headings are "Number Prefix" ","Is Active", “Extension Range Start” and “Extension Range End”.
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:87","type":"sequence"}]
 */
class EnterpriseRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName availableNumberPrefixTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 500f9871ed90b8ab3fbd262883ab503b:87
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $availableNumberPrefixTable = null;

    /**
     * Getter for availableNumberPrefixTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAvailableNumberPrefixTable()
    {
        return $this->availableNumberPrefixTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableNumberPrefixTable;
    }

    /**
     * Setter for availableNumberPrefixTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableNumberPrefixTable
     * @return $this
     */
    public function setAvailableNumberPrefixTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableNumberPrefixTable)
    {
        $this->availableNumberPrefixTable = $availableNumberPrefixTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableNumberPrefixTable()
    {
        $this->availableNumberPrefixTable = null;
        return $this;
    }
}

