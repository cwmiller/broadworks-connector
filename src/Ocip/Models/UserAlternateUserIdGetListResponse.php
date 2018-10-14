<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAlternateUserIdGetListResponse
 *
 * Response to UserAlternateUserIdGetListRequest.
 *         Contains a table of the main user id and the alternate user ids, the
 * column headings are: "User Id", "Description", "Alternate".
 *         The possible values for "Alternate" are "true" and "false".
 *         The "Description" is only present for alternate user Ids.
 *
 * @see UserAlternateUserIdGetListRequest
 */
class UserAlternateUserIdGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userIdTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userIdTable = null;

    /**
     * Getter for userIdTable
     *
     * @ElementName userIdTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserIdTable()
    {
        return $this->userIdTable;
    }

    /**
     * Setter for userIdTable
     *
     * @ElementName userIdTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userIdTable
     * @return $this
     */
    public function setUserIdTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userIdTable)
    {
        $this->userIdTable = $userIdTable;
        return $this;
    }


}

