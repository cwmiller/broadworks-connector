<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse
 *
 * Response to
 * EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest.
 *         Contains a list of number ranges that are assigned to an enterprise and
 * still available for assignment to users within the enterprise.
 *         The column headings are "Number Range Start", "Number Range End" and "Is
 * Active".
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest
 */
class EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableNumberRangeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
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

