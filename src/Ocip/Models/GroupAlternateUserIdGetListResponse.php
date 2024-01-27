<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAlternateUserIdGetListResponse
 *
 * Response to GroupAlternateUserIdGetListRequest.
 *         The "User Type" column contains the corresponding enumerated UserType value.
 *         Contains a table of alternate user ids, the column headings are: 
 *           "User Id", "Alternate User Id" and "User Type".
 *
 * @see GroupAlternateUserIdGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:1870","type":"sequence"}]
 */
class GroupAlternateUserIdGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName alternateUserIdTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:1870
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $alternateUserIdTable = null;

    /**
     * Getter for alternateUserIdTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAlternateUserIdTable()
    {
        return $this->alternateUserIdTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateUserIdTable;
    }

    /**
     * Setter for alternateUserIdTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alternateUserIdTable
     * @return $this
     */
    public function setAlternateUserIdTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alternateUserIdTable)
    {
        $this->alternateUserIdTable = $alternateUserIdTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateUserIdTable()
    {
        $this->alternateUserIdTable = null;
        return $this;
    }
}

