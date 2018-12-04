<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringIncomingCriteriaGetAssignedListResponse
 *
 * Response to ServiceProviderCommunicationBarringIncomingCriteriaGetAssignedListRequest.
 *         Contains a table of all Communication Barring Incoming Criteria assigned to the
 *         service provider. The column headings are: "Name" and "Description".
 *
 * @see ServiceProviderCommunicationBarringIncomingCriteriaGetAssignedListRequest
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:1673","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringIncomingCriteriaGetAssignedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:1673
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for criteriaTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable
     * @return $this
     */
    public function setCriteriaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaTable()
    {
        $this->criteriaTable = null;
        return $this;
    }


}

