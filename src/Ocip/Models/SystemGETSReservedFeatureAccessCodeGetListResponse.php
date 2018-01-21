<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSReservedFeatureAccessCodeGetListResponse
 *
 * Response to SystemGETSReservedFeatureAccessCodeGetListRequest. 
 *         The table columns are: "Code" and "Description".
 */
class SystemGETSReservedFeatureAccessCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reservedCodeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $reservedCodeTable = null;

    /**
     * Getter for reservedCodeTable
     *
     * @ElementName reservedCodeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getReservedCodeTable()
    {
        return $this->reservedCodeTable;
    }

    /**
     * Setter for reservedCodeTable
     *
     * @ElementName reservedCodeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $reservedCodeTable
     * @return $this
     */
    public function setReservedCodeTable($reservedCodeTable)
    {
        $this->reservedCodeTable = $reservedCodeTable;
        return $this;
    }


}

