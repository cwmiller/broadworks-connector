<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse
 *
 * Response to GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest.
 *         Contains a list of number prefixess that are assigned to a group and still available for assignment to users within the group.
 *         The column headings are "Number Prefix" and "Is Active".
 *
 * @see GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListRequest
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:247","type":"sequence"}]
 */
class GroupRouteListEnterpriseTrunkNumberPrefixGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableNumberPrefixTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 3f28429898a57a7f7846d3877b22df9f:247
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $availableNumberPrefixTable = null;

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

