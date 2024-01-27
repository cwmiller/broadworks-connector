<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialPlanPolicyGetAccessCodeListResponse
 *
 * Response to SystemDialPlanPolicyGetAccessCodeListRequest.
 *         Contains a table with column headings: "Access Code", "Enable Secondary Dial Tone", "Description"
 *
 * @see SystemDialPlanPolicyGetAccessCodeListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9212","type":"sequence"}]
 */
class SystemDialPlanPolicyGetAccessCodeListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName accessCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:9212
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

