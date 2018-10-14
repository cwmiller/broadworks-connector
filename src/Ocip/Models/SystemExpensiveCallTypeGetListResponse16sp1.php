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
 */
class SystemExpensiveCallTypeGetListResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alternateCallIndicatorTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $alternateCallIndicatorTable = null;

    /**
     * Getter for alternateCallIndicatorTable
     *
     * @ElementName alternateCallIndicatorTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAlternateCallIndicatorTable()
    {
        return $this->alternateCallIndicatorTable;
    }

    /**
     * Setter for alternateCallIndicatorTable
     *
     * @ElementName alternateCallIndicatorTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $alternateCallIndicatorTable
     * @return $this
     */
    public function setAlternateCallIndicatorTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alternateCallIndicatorTable)
    {
        $this->alternateCallIndicatorTable = $alternateCallIndicatorTable;
        return $this;
    }


}

