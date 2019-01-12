<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallingPlanGetDigitPatternListResponse
 *
 * Response to GroupCallingPlanGetDigitPatternListRequest.
 *         Contains a table with column headings: "Name", "Digit Pattern".
 *
 * @see GroupCallingPlanGetDigitPatternListRequest
 * @Groups [{"id":"00a30b95794e8eb54c36eccd0a6188fa:97","type":"sequence"}]
 */
class GroupCallingPlanGetDigitPatternListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName digitPatternTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 00a30b95794e8eb54c36eccd0a6188fa:97
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

