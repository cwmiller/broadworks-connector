<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemStateOrProvinceGetListResponse
 *
 * Contains a 2 column table with column headings 'Key' and 'Display Name' and a row
 *         for each state or province.
 *
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:15829","type":"sequence"}]
 */
class SystemStateOrProvinceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName stateOrProvinceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b5f5416d9e71f8e4246cda16c4723744:15829
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $stateOrProvinceTable = null;

    /**
     * Getter for stateOrProvinceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getStateOrProvinceTable()
    {
        return $this->stateOrProvinceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->stateOrProvinceTable;
    }

    /**
     * Setter for stateOrProvinceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $stateOrProvinceTable
     * @return $this
     */
    public function setStateOrProvinceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $stateOrProvinceTable)
    {
        $this->stateOrProvinceTable = $stateOrProvinceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStateOrProvinceTable()
    {
        $this->stateOrProvinceTable = null;
        return $this;
    }


}

