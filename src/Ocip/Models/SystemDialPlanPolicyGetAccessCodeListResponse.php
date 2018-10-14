<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialPlanPolicyGetAccessCodeListResponse
 *
 * Response to SystemDialPlanPolicyGetAccessCodeListRequest.
 *         Contains a table with column headings: "Access Code", "Enable Secondary
 * Dial Tone", "Description"
 *
 * @see SystemDialPlanPolicyGetAccessCodeListRequest
 */
class SystemDialPlanPolicyGetAccessCodeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessCodeTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $accessCodeTable = null;

    /**
     * Getter for accessCodeTable
     *
     * @ElementName accessCodeTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAccessCodeTable()
    {
        return $this->accessCodeTable;
    }

    /**
     * Setter for accessCodeTable
     *
     * @ElementName accessCodeTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $accessCodeTable
     * @return $this
     */
    public function setAccessCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $accessCodeTable)
    {
        $this->accessCodeTable = $accessCodeTable;
        return $this;
    }


}

