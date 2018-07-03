<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
 *
 * Response to GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest.
 *         Contains a list of number prefixess that are assigned to a group and
 * still available for assignment to users within the group.
 *         The column headings are "Number Prefix" and "Is Active".
 *
 * @see GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest
 */
class GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

