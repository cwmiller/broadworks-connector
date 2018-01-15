<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterCallDispositionCodeGetAvailableListResponse
 *
 * Response to the UserCallCenterCallDispositionCodeGetAvailableListRequest.
 *         This list may include Group/Enterprise level codes in addition to the
 * Call Center level codes, 
 *         depending on the call center disposition codes settings.
 *         Only active codes are included in the list.
 *         Contains a table with column headings: "Code", "Description" and
 * "Level".
 *         Level column can be any of the values in the data type
 * CallDispositionCodeLevel.
 */
class UserCallCenterCallDispositionCodeGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dispositionCodesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dispositionCodesTable = null;

    /**
     * Getter for dispositionCodesTable
     *
     * @ElementName dispositionCodesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDispositionCodesTable()
    {
        return $this->dispositionCodesTable;
    }

    /**
     * Setter for dispositionCodesTable
     *
     * @ElementName dispositionCodesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $dispositionCodesTable
     * @return $this
     */
    public function setDispositionCodesTable($dispositionCodesTable)
    {
        $this->dispositionCodesTable = $dispositionCodesTable;
        return $this;
    }


}

