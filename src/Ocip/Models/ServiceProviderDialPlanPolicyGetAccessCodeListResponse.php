<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialPlanPolicyGetAccessCodeListResponse
 *
 * Response to ServiceProviderDialPlanPolicyGetAccessCodeListRequest.
 *         Contains a table with column headings: "Access Code",
 *         "Enable Secondary Dial Tone", "Description".
 *
 * @see ServiceProviderDialPlanPolicyGetAccessCodeListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3672","type":"sequence"}]
 */
class ServiceProviderDialPlanPolicyGetAccessCodeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:3672
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

