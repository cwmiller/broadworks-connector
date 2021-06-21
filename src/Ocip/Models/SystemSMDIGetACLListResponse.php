<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIGetACLListResponse
 *
 * Response to SystemSMDIGetACLListRequest. The table columns are:
 *         "Net Address" and "Description".
 *
 * @see SystemSMDIGetACLListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17672","type":"sequence"}]
 */
class SystemSMDIGetACLListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName aclTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17672
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $aclTable = null;

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

