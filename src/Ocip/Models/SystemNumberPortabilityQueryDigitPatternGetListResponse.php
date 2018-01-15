<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetListResponse
 *
 * Response to the SystemNumberPortabilityQueryDigitPatternGetListRequest.
 *         Contains a table with column headings:
 *         "Digit Pattern", "Status".
 */
class SystemNumberPortabilityQueryDigitPatternGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName statusDigitPatternTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $statusDigitPatternTable = null;

    /**
     * Getter for statusDigitPatternTable
     *
     * @ElementName statusDigitPatternTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getStatusDigitPatternTable()
    {
        return $this->statusDigitPatternTable;
    }

    /**
     * Setter for statusDigitPatternTable
     *
     * @ElementName statusDigitPatternTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $statusDigitPatternTable
     * @return $this
     */
    public function setStatusDigitPatternTable($statusDigitPatternTable)
    {
        $this->statusDigitPatternTable = $statusDigitPatternTable;
        return $this;
    }


}

