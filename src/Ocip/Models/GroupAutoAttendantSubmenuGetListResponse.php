<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuGetListResponse
 *
 * Response to the GroupAutoAttendantSubmenuGetListRequest.
 *         Contains a table with column headings:
 *         "Submenu Id" "Is Used".
 *         The column values for "Is Used" can either be true, or false.
 *
 * @see GroupAutoAttendantSubmenuGetListRequest
 * @Groups [{"id":"991f3e2b8774e7414716848f9b5935fc:433","type":"sequence"}]
 */
class GroupAutoAttendantSubmenuGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName submenuTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 991f3e2b8774e7414716848f9b5935fc:433
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $submenuTable = null;

    /**
     * Getter for submenuTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSubmenuTable()
    {
        return $this->submenuTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->submenuTable;
    }

    /**
     * Setter for submenuTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $submenuTable
     * @return $this
     */
    public function setSubmenuTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $submenuTable)
    {
        $this->submenuTable = $submenuTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubmenuTable()
    {
        $this->submenuTable = null;
        return $this;
    }


}

