<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSNumberGetListResponse
 *
 * Response to SystemGETSNumberGetListRequest. 
 *         The table columns are: "Number", "Type" and "Description".
 *
 * @see SystemGETSNumberGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11064","type":"sequence"}]
 */
class SystemGETSNumberGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName reservedNumberTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:11064
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $reservedNumberTable = null;

    /**
     * Getter for reservedNumberTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getReservedNumberTable()
    {
        return $this->reservedNumberTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reservedNumberTable;
    }

    /**
     * Setter for reservedNumberTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $reservedNumberTable
     * @return $this
     */
    public function setReservedNumberTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $reservedNumberTable)
    {
        $this->reservedNumberTable = $reservedNumberTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReservedNumberTable()
    {
        $this->reservedNumberTable = null;
        return $this;
    }
}

