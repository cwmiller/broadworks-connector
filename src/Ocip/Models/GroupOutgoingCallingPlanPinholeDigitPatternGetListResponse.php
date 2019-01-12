<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanPinholeDigitPatternGetListResponse
 *
 * Response to GroupOutgoingCallingPlanPinholeDigitPatternGetListRequest.
 *         Contains a table with column headings: "Name", "Digit Pattern".
 *
 * @see GroupOutgoingCallingPlanPinholeDigitPatternGetListRequest
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:528","type":"sequence"}]
 */
class GroupOutgoingCallingPlanPinholeDigitPatternGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName digitPatternTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:528
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $digitPatternTable = null;

    /**
     * Getter for digitPatternTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDigitPatternTable()
    {
        return $this->digitPatternTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternTable;
    }

    /**
     * Setter for digitPatternTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $digitPatternTable
     * @return $this
     */
    public function setDigitPatternTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $digitPatternTable)
    {
        $this->digitPatternTable = $digitPatternTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitPatternTable()
    {
        $this->digitPatternTable = null;
        return $this;
    }


}

