<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringDigitPatternCriteriaGetListResponse
 *
 * Response to the SystemCommunicationBarringDigitPatternCriteriaGetListRequest.
 *         The response contains a table of all Digit Pattern Criteria defined at the system level. The column headings are "Name" and "Description"
 *
 * @see SystemCommunicationBarringDigitPatternCriteriaGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6050","type":"sequence"}]
 */
class SystemCommunicationBarringDigitPatternCriteriaGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:6050
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $criteriaTable = null;

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

