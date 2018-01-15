<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse
 *
 * Response to the
 * SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest.
 *         The response contains a table of all Profiles that use the specific
 * Digit Pattern Criteria. The column headings are "Name" and "Description"
 */
class SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $profileTable = null;

    /**
     * Getter for profileTable
     *
     * @ElementName profileTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getProfileTable()
    {
        return $this->profileTable;
    }

    /**
     * Setter for profileTable
     *
     * @ElementName profileTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $profileTable
     * @return $this
     */
    public function setProfileTable($profileTable)
    {
        $this->profileTable = $profileTable;
        return $this;
    }


}

