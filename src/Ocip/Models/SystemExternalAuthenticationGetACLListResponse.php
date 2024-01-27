<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExternalAuthenticationGetACLListResponse
 *
 * Response to SystemExternalAuthenticationGetACLListRequest. The table columns are:
 *         "Net Address" and "Description".
 *
 * @see SystemExternalAuthenticationGetACLListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10193","type":"sequence"}]
 */
class SystemExternalAuthenticationGetACLListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName aclTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:10193
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $aclTable = null;

    /**
     * Getter for aclTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAclTable()
    {
        return $this->aclTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->aclTable;
    }

    /**
     * Setter for aclTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $aclTable
     * @return $this
     */
    public function setAclTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $aclTable)
    {
        $this->aclTable = $aclTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAclTable()
    {
        $this->aclTable = null;
        return $this;
    }
}

