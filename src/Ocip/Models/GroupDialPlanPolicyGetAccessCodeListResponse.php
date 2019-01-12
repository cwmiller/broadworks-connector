<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialPlanPolicyGetAccessCodeListResponse
 *
 * Response to GroupDialPlanPolicyGetAccessCodeListRequest
 *         Contains a table with column headings: "Access Code",
 *         "Enable Secondary Dial Tone", "Description"
 *
 * @see GroupDialPlanPolicyGetAccessCodeListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3878","type":"sequence"}]
 */
class GroupDialPlanPolicyGetAccessCodeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3878
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $accessCodeTable = null;

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

