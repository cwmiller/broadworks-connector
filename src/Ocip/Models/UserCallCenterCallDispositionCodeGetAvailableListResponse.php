<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterCallDispositionCodeGetAvailableListResponse
 *
 * Response to the UserCallCenterCallDispositionCodeGetAvailableListRequest.
 *         This list may include Group/Enterprise level codes in addition to the Call Center level codes, 
 *         depending on the call center disposition codes settings.
 *         Only active codes are included in the list.
 *         Contains a table with column headings: "Code", "Description" and "Level".
 *         Level column can be any of the values in the data type CallDispositionCodeLevel.
 *
 * @see UserCallCenterCallDispositionCodeGetAvailableListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:6715","type":"sequence"}]
 */
class UserCallCenterCallDispositionCodeGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dispositionCodesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:6715
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $dispositionCodesTable = null;

    /**
     * Getter for dispositionCodesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDispositionCodesTable()
    {
        return $this->dispositionCodesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dispositionCodesTable;
    }

    /**
     * Setter for dispositionCodesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dispositionCodesTable
     * @return $this
     */
    public function setDispositionCodesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dispositionCodesTable)
    {
        $this->dispositionCodesTable = $dispositionCodesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDispositionCodesTable()
    {
        $this->dispositionCodesTable = null;
        return $this;
    }
}

