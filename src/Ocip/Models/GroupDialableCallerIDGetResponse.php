<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialableCallerIDGetResponse
 *
 * Response to the GroupDialableCallerIDGetRequest.
 *         The criteria table�s column headings are "Active", "Name",
 * "Description", �Prefix Digits�, �Priority�.
 */
class GroupDialableCallerIDGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useGroupCriteria
     * @var bool|null
     */
    private $useGroupCriteria = null;

    /**
     * @ElementName nsScreeningFailurePolicy
     * @var string|null
     */
    private $nsScreeningFailurePolicy = null;

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for useGroupCriteria
     *
     * @ElementName useGroupCriteria
     * @return bool|null
     */
    public function getUseGroupCriteria()
    {
        return $this->useGroupCriteria;
    }

    /**
     * Setter for useGroupCriteria
     *
     * @ElementName useGroupCriteria
     * @param bool|null $useGroupCriteria
     * @return $this
     */
    public function setUseGroupCriteria($useGroupCriteria)
    {
        $this->useGroupCriteria = $useGroupCriteria;
        return $this;
    }

    /**
     * Getter for nsScreeningFailurePolicy
     *
     * @ElementName nsScreeningFailurePolicy
     * @return string|null
     */
    public function getNsScreeningFailurePolicy()
    {
        return $this->nsScreeningFailurePolicy;
    }

    /**
     * Setter for nsScreeningFailurePolicy
     *
     * @ElementName nsScreeningFailurePolicy
     * @param string|null $nsScreeningFailurePolicy
     * @return $this
     */
    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy)
    {
        $this->nsScreeningFailurePolicy = $nsScreeningFailurePolicy;
        return $this;
    }

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

