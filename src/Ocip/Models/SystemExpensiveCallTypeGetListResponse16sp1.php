<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExpensiveCallTypeGetListResponse16sp1
 *
 * Response to SystemExpensiveCallTypeGetListRequest16sp1.
 *         The column headings are:
 *         "Alternate Call Indicator", "Treatment Audio File".
 *
 * @see SystemExpensiveCallTypeGetListRequest16sp1
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:8305","type":"sequence"}]
 */
class SystemExpensiveCallTypeGetListResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alternateCallIndicatorTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:8305
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $alternateCallIndicatorTable = null;

    /**
     * Getter for alternateCallIndicatorTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAlternateCallIndicatorTable()
    {
        return $this->alternateCallIndicatorTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCallIndicatorTable;
    }

    /**
     * Setter for alternateCallIndicatorTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alternateCallIndicatorTable
     * @return $this
     */
    public function setAlternateCallIndicatorTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alternateCallIndicatorTable)
    {
        $this->alternateCallIndicatorTable = $alternateCallIndicatorTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateCallIndicatorTable()
    {
        $this->alternateCallIndicatorTable = null;
        return $this;
    }


}

