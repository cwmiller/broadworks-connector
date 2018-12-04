<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSReservedFeatureAccessCodeGetListResponse
 *
 * Response to SystemGETSReservedFeatureAccessCodeGetListRequest. 
 *         The table columns are: "Code" and "Description".
 *
 * @see SystemGETSReservedFeatureAccessCodeGetListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:9358","type":"sequence"}]
 */
class SystemGETSReservedFeatureAccessCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reservedCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:9358
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $reservedCodeTable = null;

    /**
     * Getter for reservedCodeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getReservedCodeTable()
    {
        return $this->reservedCodeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reservedCodeTable;
    }

    /**
     * Setter for reservedCodeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $reservedCodeTable
     * @return $this
     */
    public function setReservedCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $reservedCodeTable)
    {
        $this->reservedCodeTable = $reservedCodeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReservedCodeTable()
    {
        $this->reservedCodeTable = null;
        return $this;
    }


}

