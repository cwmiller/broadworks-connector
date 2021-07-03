<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemXsiPolicyProfileGetListResponse
 *
 * Response to the SystemXsiPolicyProfileGetListRequest
 *         Contains a table with column headings: "Name", "Level", "Description", "Default".
 *
 * @see SystemXsiPolicyProfileGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19524","type":"sequence"}]
 */
class SystemXsiPolicyProfileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName xsiPolicyProfileTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19524
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $xsiPolicyProfileTable = null;

    /**
     * Getter for xsiPolicyProfileTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getXsiPolicyProfileTable()
    {
        return $this->xsiPolicyProfileTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsiPolicyProfileTable;
    }

    /**
     * Setter for xsiPolicyProfileTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $xsiPolicyProfileTable
     * @return $this
     */
    public function setXsiPolicyProfileTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $xsiPolicyProfileTable)
    {
        $this->xsiPolicyProfileTable = $xsiPolicyProfileTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsiPolicyProfileTable()
    {
        $this->xsiPolicyProfileTable = null;
        return $this;
    }


}

