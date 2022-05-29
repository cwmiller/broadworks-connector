<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialPlanPolicyGetAccessCodeListResponse
 *
 * Response to SystemDialPlanPolicyGetAccessCodeListRequest.
 *         Contains a table with column headings: "Access Code", "Enable Secondary Dial Tone", "Description"
 *
 * @see SystemDialPlanPolicyGetAccessCodeListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9088","type":"sequence"}]
 */
class SystemDialPlanPolicyGetAccessCodeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9088
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $accessCodeTable = null;

    /**
     * Getter for accessCodeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAccessCodeTable()
    {
        return $this->accessCodeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessCodeTable;
    }

    /**
     * Setter for accessCodeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $accessCodeTable
     * @return $this
     */
    public function setAccessCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $accessCodeTable)
    {
        $this->accessCodeTable = $accessCodeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessCodeTable()
    {
        $this->accessCodeTable = null;
        return $this;
    }


}

