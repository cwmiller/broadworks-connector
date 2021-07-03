<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse
 *
 * Response to the ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest.
 *         The response contains a table of all Profiles that use the specific Digit Pattern Criteria. The column headings are "Name" and "Description"
 *
 * @see ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:2413","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2413
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $profileTable = null;

    /**
     * Getter for profileTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getProfileTable()
    {
        return $this->profileTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileTable;
    }

    /**
     * Setter for profileTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profileTable
     * @return $this
     */
    public function setProfileTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profileTable)
    {
        $this->profileTable = $profileTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileTable()
    {
        $this->profileTable = null;
        return $this;
    }


}

