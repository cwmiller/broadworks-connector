<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
 *
 * Response to
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest. 
 *         Contains a list of available number prefixes not yet assigned to any
 * group.
 *         The column headings are "Number Prefix" and "Is Active".
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setAvailableNumberPrefixTable($availableNumberPrefixTable)
    {
        $this->availableNumberPrefixTable = $availableNumberPrefixTable;
        return $this;
    }


}

