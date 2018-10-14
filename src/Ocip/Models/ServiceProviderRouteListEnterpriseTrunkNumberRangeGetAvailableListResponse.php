<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse
 *
 * Response to
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest.
 * Contains a list of available number ranges not yet assigned to any group.
 *         The column headings are "Number Range Start", "Number Range End" and "Is
 * Active".
 *
 * @see ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest
 */
class ServiceProviderRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableNumberRangeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $availableNumberRangeTable = null;

    /**
     * Getter for availableNumberRangeTable
     *
     * @ElementName availableNumberRangeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAvailableNumberRangeTable()
    {
        return $this->availableNumberRangeTable;
    }

    /**
     * Setter for availableNumberRangeTable
     *
     * @ElementName availableNumberRangeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $availableNumberRangeTable
     * @return $this
     */
    public function setAvailableNumberRangeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableNumberRangeTable)
    {
        $this->availableNumberRangeTable = $availableNumberRangeTable;
        return $this;
    }


}

