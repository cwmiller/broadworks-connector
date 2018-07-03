<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetInstanceListResponse
 *
 * Response to the GroupFindMeFollowMeGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department",
 * "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 *
 * @see GroupFindMeFollowMeGetInstanceListRequest
 */
class GroupFindMeFollowMeGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName findMeFollowMeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $findMeFollowMeTable = null;

    /**
     * Getter for findMeFollowMeTable
     *
     * @ElementName findMeFollowMeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getFindMeFollowMeTable()
    {
        return $this->findMeFollowMeTable;
    }

    /**
     * Setter for findMeFollowMeTable
     *
     * @ElementName findMeFollowMeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $findMeFollowMeTable
     * @return $this
     */
    public function setFindMeFollowMeTable($findMeFollowMeTable)
    {
        $this->findMeFollowMeTable = $findMeFollowMeTable;
        return $this;
    }


}

