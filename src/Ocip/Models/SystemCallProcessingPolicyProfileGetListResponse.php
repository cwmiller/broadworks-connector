<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetListResponse
 *
 * Response to the SystemCallProcessingPolicyProfileGetListRequest.
 *         The response contains a table of all Call Processing Policy Profiles
 *         in the system. The column headings are "Name" and "Description".
 *
 * @see SystemCallProcessingPolicyProfileGetListRequest
 */
class SystemCallProcessingPolicyProfileGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName callProcessingPolicyProfilesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callProcessingPolicyProfilesTable = null;

    /**
     * Getter for callProcessingPolicyProfilesTable
     *
     * @ElementName callProcessingPolicyProfilesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCallProcessingPolicyProfilesTable()
    {
        return $this->callProcessingPolicyProfilesTable;
    }

    /**
     * Setter for callProcessingPolicyProfilesTable
     *
     * @ElementName callProcessingPolicyProfilesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $callProcessingPolicyProfilesTable
     * @return $this
     */
    public function setCallProcessingPolicyProfilesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callProcessingPolicyProfilesTable)
    {
        $this->callProcessingPolicyProfilesTable = $callProcessingPolicyProfilesTable;
        return $this;
    }


}

