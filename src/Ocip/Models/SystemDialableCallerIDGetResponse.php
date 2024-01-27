<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialableCallerIDGetResponse
 *
 * Response to the SystemDialableCallerIDGetRequest.
 *         The criteria table?s column headings are ?Active?, "Name", "Description", ?Prefix Digits?, and ?Priority?.
 *
 * @see SystemDialableCallerIDGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9129","type":"sequence"}]
 */
class SystemDialableCallerIDGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:9129
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

