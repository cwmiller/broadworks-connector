<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSNumberGetListResponse
 *
 * Response to SystemGETSNumberGetListRequest. 
 *         The table columns are: "Number", "Type" and "Description".
 */
class SystemGETSNumberGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reservedNumberTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $reservedNumberTable = null;

    /**
     * Getter for reservedNumberTable
     *
     * @ElementName reservedNumberTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getReservedNumberTable()
    {
        return $this->reservedNumberTable;
    }

    /**
     * Setter for reservedNumberTable
     *
     * @ElementName reservedNumberTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $reservedNumberTable
     * @return $this
     */
    public function setReservedNumberTable($reservedNumberTable)
    {
        $this->reservedNumberTable = $reservedNumberTable;
        return $this;
    }


}

