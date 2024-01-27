<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRoutePointCallDispositionCodeGetAvailableListResponse
 *
 * Response to the UserRoutePointCallDispositionCodeGetAvailableListRequest.
 *         This list may include Group/Enterprise level codes in addition to the Route Point level codes, 
 *         depending on the call center disposition codes settings.
 *         Only active codes are included in the list.
 *         Contains a table with column headings: "Code", "Description" and "Level".
 *         Level column can be any of the values in the data type CallDispositionCodeLevel.
 *
 * @see UserRoutePointCallDispositionCodeGetAvailableListRequest
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:1237","type":"sequence"}]
 */
class UserRoutePointCallDispositionCodeGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dispositionCodesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e474d11df9a1d1d1041e589793e40de8:1237
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

