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
 */
class EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setAvailableNumberRangeTable($availableNumberRangeTable)
    {
        $this->availableNumberRangeTable = $availableNumberRangeTable;
        return $this;
    }


}

