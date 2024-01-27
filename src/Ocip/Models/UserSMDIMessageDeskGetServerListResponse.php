<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskGetServerListResponse
 *
 * Response to the UserSMDIMessageDeskGetServerListRequest.
 *         The SMDI Server table column headings are: "Device Name", "Net Address", "Port".
 *
 * @see UserSMDIMessageDeskGetServerListRequest
 * @Groups [{"id":"aa3a240fa755015613cfb9259eccafef:308","type":"sequence"}]
 */
class UserSMDIMessageDeskGetServerListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName smdiServerTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group aa3a240fa755015613cfb9259eccafef:308
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $smdiServerTable = null;

    /**
     * Getter for smdiServerTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSmdiServerTable()
    {
        return $this->smdiServerTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->smdiServerTable;
    }

    /**
     * Setter for smdiServerTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $smdiServerTable
     * @return $this
     */
    public function setSmdiServerTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $smdiServerTable)
    {
        $this->smdiServerTable = $smdiServerTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSmdiServerTable()
    {
        $this->smdiServerTable = null;
        return $this;
    }
}

