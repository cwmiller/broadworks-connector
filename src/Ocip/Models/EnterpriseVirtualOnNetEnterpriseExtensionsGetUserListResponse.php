<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse
 *
 * Response to   EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest.
 *         Contains a table with column headings : "Group Id", "Last Name", "First Name", "Phone Number", "Extension", 
 *         "Virtual On-Net Call Type" in a row for each user.
 *
 * @see EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest
 * @Groups [{"id":"73530229e066070baac4c09dac256d69:79","type":"sequence"}]
 */
class EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 73530229e066070baac4c09dac256d69:79
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }


}

