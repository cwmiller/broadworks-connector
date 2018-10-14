<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanPinholeDigitPatternGetListResponse
 *
 * Response to GroupOutgoingCallingPlanPinholeDigitPatternGetListRequest.
 *         Contains a table with column headings: "Name", "Digit Pattern".
 *
 * @see GroupOutgoingCallingPlanPinholeDigitPatternGetListRequest
 */
class GroupOutgoingCallingPlanPinholeDigitPatternGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName digitPatternTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $digitPatternTable = null;

    /**
     * Getter for digitPatternTable
     *
     * @ElementName digitPatternTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDigitPatternTable()
    {
        return $this->digitPatternTable;
    }

    /**
     * Setter for digitPatternTable
     *
     * @ElementName digitPatternTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $digitPatternTable
     * @return $this
     */
    public function setDigitPatternTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $digitPatternTable)
    {
        $this->digitPatternTable = $digitPatternTable;
        return $this;
    }


}

