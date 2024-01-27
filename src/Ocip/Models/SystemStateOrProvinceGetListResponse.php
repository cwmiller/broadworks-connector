<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemStateOrProvinceGetListResponse
 *
 * Contains a 2 column table with column headings 'Key' and 'Display Name' and a row
 *         for each state or province.
 *
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18092","type":"sequence"}]
 */
class SystemStateOrProvinceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName stateOrProvinceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:18092
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $stateOrProvinceTable = null;

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

