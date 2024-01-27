<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRoutePointSupervisorGetListResponse
 *
 * Response to the UserRoutePointSupervisorGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address",
 * 		"Location Code".
 *
 * @see UserRoutePointSupervisorGetListRequest
 * @Groups [{"id":"e474d11df9a1d1d1041e589793e40de8:1272","type":"sequence"}]
 */
class UserRoutePointSupervisorGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName supervisorTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e474d11df9a1d1d1041e589793e40de8:1272
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $supervisorTable = null;

    /**
     * Getter for supervisorTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSupervisorTable()
    {
        return $this->supervisorTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorTable;
    }

    /**
     * Setter for supervisorTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $supervisorTable
     * @return $this
     */
    public function setSupervisorTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $supervisorTable)
    {
        $this->supervisorTable = $supervisorTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorTable()
    {
        $this->supervisorTable = null;
        return $this;
    }
}

