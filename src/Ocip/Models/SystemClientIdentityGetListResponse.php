<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClientIdentityGetListResponse
 *
 * Response to SystemClientIdentityGetListRequest.
 *         Returns a table with column headings:
 *          "Client Identity".
 *
 * @see SystemClientIdentityGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:5409","type":"sequence"}]
 */
class SystemClientIdentityGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName clientIdentityTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:5409
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $clientIdentityTable = null;

    /**
     * Getter for clientIdentityTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getClientIdentityTable()
    {
        return $this->clientIdentityTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->clientIdentityTable;
    }

    /**
     * Setter for clientIdentityTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $clientIdentityTable
     * @return $this
     */
    public function setClientIdentityTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $clientIdentityTable)
    {
        $this->clientIdentityTable = $clientIdentityTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClientIdentityTable()
    {
        $this->clientIdentityTable = null;
        return $this;
    }


}

