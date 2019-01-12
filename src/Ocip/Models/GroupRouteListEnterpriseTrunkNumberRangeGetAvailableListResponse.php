<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse
 *
 * Response to GroupRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest.
 *         Contains a list of number ranges that are assigned to a group and still available for assignment to users within the group.
 *         The column headings are "Number Range Start", "Number Range End" and "Is Active".
 *
 * @see GroupRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:357","type":"sequence"}]
 */
class GroupRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableNumberRangeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 3f28429898a57a7f7846d3877b22df9f:357
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $availableNumberRangeTable = null;

    /**
     * Getter for availableNumberRangeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAvailableNumberRangeTable()
    {
        return $this->availableNumberRangeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableNumberRangeTable;
    }

    /**
     * Setter for availableNumberRangeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableNumberRangeTable
     * @return $this
     */
    public function setAvailableNumberRangeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $availableNumberRangeTable)
    {
        $this->availableNumberRangeTable = $availableNumberRangeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableNumberRangeTable()
    {
        $this->availableNumberRangeTable = null;
        return $this;
    }


}

