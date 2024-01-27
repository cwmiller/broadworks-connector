<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse
 *
 * Response to EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest.
 *         Contains a list of number ranges that are assigned to an enterprise and still available for assignment to users within the enterprise.
 *         The column headings are "Number Range Start", "Number Range End" ,"Is Active" and “Extension Length”..
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListRequest
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:160","type":"sequence"}]
 */
class EnterpriseRouteListEnterpriseTrunkNumberRangeGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName availableNumberRangeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 500f9871ed90b8ab3fbd262883ab503b:160
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $availableNumberRangeTable = null;

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

