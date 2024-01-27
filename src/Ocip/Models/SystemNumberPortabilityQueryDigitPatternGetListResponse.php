<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetListResponse
 *
 * Response to the SystemNumberPortabilityQueryDigitPatternGetListRequest.
 *         Contains a table with column headings:
 *         "Digit Pattern", "Status".
 *
 * @see SystemNumberPortabilityQueryDigitPatternGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13263","type":"sequence"}]
 */
class SystemNumberPortabilityQueryDigitPatternGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName statusDigitPatternTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:13263
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $statusDigitPatternTable = null;

    /**
     * Getter for statusDigitPatternTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getStatusDigitPatternTable()
    {
        return $this->statusDigitPatternTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statusDigitPatternTable;
    }

    /**
     * Setter for statusDigitPatternTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $statusDigitPatternTable
     * @return $this
     */
    public function setStatusDigitPatternTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $statusDigitPatternTable)
    {
        $this->statusDigitPatternTable = $statusDigitPatternTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatusDigitPatternTable()
    {
        $this->statusDigitPatternTable = null;
        return $this;
    }
}

