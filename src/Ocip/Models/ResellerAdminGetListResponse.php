<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminGetListResponse
 *
 * Response to ResellerAdminGetListRequest.
 *         Contains a 4 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Language".
 *
 * @see ResellerAdminGetListRequest
 * @Groups [{"id":"7e8feb1c28b49a3b8755f86e716ebee7:120","type":"sequence"}]
 */
class ResellerAdminGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName resellerAdminTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7e8feb1c28b49a3b8755f86e716ebee7:120
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $resellerAdminTable = null;

    /**
     * Getter for resellerAdminTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getResellerAdminTable()
    {
        return $this->resellerAdminTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerAdminTable;
    }

    /**
     * Setter for resellerAdminTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $resellerAdminTable
     * @return $this
     */
    public function setResellerAdminTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $resellerAdminTable)
    {
        $this->resellerAdminTable = $resellerAdminTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerAdminTable()
    {
        $this->resellerAdminTable = null;
        return $this;
    }


}

