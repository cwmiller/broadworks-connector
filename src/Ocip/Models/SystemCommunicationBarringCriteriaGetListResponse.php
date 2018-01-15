<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCriteriaGetListResponse
 *
 * Response to the SystemCommunicationBarringCriteriaGetListRequest.
 *         The response contains a table of all Communication Barring Criteria
 *         in the system. The column headings are "Name" and "Description".
 */
class SystemCommunicationBarringCriteriaGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for criteriaTable
     *
     * @ElementName criteriaTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @ElementName criteriaTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $criteriaTable
     * @return $this
     */
    public function setCriteriaTable($criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }


}

