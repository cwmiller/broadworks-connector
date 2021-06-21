<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetInstanceListResponse
 *
 * Response to the GroupFindMeFollowMeGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 *
 * @see GroupFindMeFollowMeGetInstanceListRequest
 * @Groups [{"id":"79f226053ee345f2ff4c37c37c8e9114:362","type":"sequence"}]
 */
class GroupFindMeFollowMeGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName findMeFollowMeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 79f226053ee345f2ff4c37c37c8e9114:362
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $findMeFollowMeTable = null;

    /**
     * Getter for findMeFollowMeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getFindMeFollowMeTable()
    {
        return $this->findMeFollowMeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->findMeFollowMeTable;
    }

    /**
     * Setter for findMeFollowMeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $findMeFollowMeTable
     * @return $this
     */
    public function setFindMeFollowMeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $findMeFollowMeTable)
    {
        $this->findMeFollowMeTable = $findMeFollowMeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFindMeFollowMeTable()
    {
        $this->findMeFollowMeTable = null;
        return $this;
    }


}

