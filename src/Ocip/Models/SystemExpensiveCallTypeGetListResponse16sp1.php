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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9894","type":"sequence"}]
 */
class SystemExpensiveCallTypeGetListResponse16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alternateCallIndicatorTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9894
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $alternateCallIndicatorTable = null;

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

