<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemStateOrProvinceGetListResponse
 *
 * Contains a 2 column table with column headings 'Key' and 'Display Name' and a
 * row
 *         for each state or province.
 */
class SystemStateOrProvinceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName stateOrProvinceTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $stateOrProvinceTable = null;

    /**
     * Getter for stateOrProvinceTable
     *
     * @ElementName stateOrProvinceTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getStateOrProvinceTable()
    {
        return $this->stateOrProvinceTable;
    }

    /**
     * Setter for stateOrProvinceTable
     *
     * @ElementName stateOrProvinceTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $stateOrProvinceTable
     * @return $this
     */
    public function setStateOrProvinceTable($stateOrProvinceTable)
    {
        $this->stateOrProvinceTable = $stateOrProvinceTable;
        return $this;
    }


}

