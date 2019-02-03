<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialableCallerIDGetResponse
 *
 * Response to the GroupDialableCallerIDGetRequest.
 *         The criteria table's column headings are "Active", "Name", "Description", "Prefix Digits", "Priority".
 *
 * @see GroupDialableCallerIDGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3779","type":"sequence"}]
 */
class GroupDialableCallerIDGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useGroupCriteria
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3779
     * @var bool|null
     */
    private $useGroupCriteria = null;

    /**
     * @ElementName nsScreeningFailurePolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3779
     * @var \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy|null
     */
    private $nsScreeningFailurePolicy = null;

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3779
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for useGroupCriteria
     *
     * @return bool
     */
    public function getUseGroupCriteria()
    {
        return $this->useGroupCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupCriteria;
    }

    /**
     * Setter for useGroupCriteria
     *
     * @param bool $useGroupCriteria
     * @return $this
     */
    public function setUseGroupCriteria($useGroupCriteria)
    {
        $this->useGroupCriteria = $useGroupCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupCriteria()
    {
        $this->useGroupCriteria = null;
        return $this;
    }

    /**
     * Getter for nsScreeningFailurePolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy
     */
    public function getNsScreeningFailurePolicy()
    {
        return $this->nsScreeningFailurePolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nsScreeningFailurePolicy;
    }

    /**
     * Setter for nsScreeningFailurePolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy $nsScreeningFailurePolicy
     * @return $this
     */
    public function setNsScreeningFailurePolicy(\CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy $nsScreeningFailurePolicy)
    {
        $this->nsScreeningFailurePolicy = $nsScreeningFailurePolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNsScreeningFailurePolicy()
    {
        $this->nsScreeningFailurePolicy = null;
        return $this;
    }

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

