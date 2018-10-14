<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExternalAuthenticationGetACLListResponse
 *
 * Response to SystemExternalAuthenticationGetACLListRequest. The table columns
 * are:
 *         "Net Address" and "Description".
 *
 * @see SystemExternalAuthenticationGetACLListRequest
 */
class SystemExternalAuthenticationGetACLListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName aclTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $aclTable = null;

    /**
     * Getter for aclTable
     *
     * @ElementName aclTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAclTable()
    {
        return $this->aclTable;
    }

    /**
     * Setter for aclTable
     *
     * @ElementName aclTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $aclTable
     * @return $this
     */
    public function setAclTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $aclTable)
    {
        $this->aclTable = $aclTable;
        return $this;
    }


}

