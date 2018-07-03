<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveModifyFilteringRequest
 *
 * Modify the filtering setting for an executive user.
 *         Both executive and the executive assistant can run this command.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserExecutiveModifyFilteringRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName enableFiltering
     * @var bool|null
     */
    private $enableFiltering = null;

    /**
     * @ElementName filteringMode
     * @var string|null
     */
    private $filteringMode = null;

    /**
     * @ElementName simpleFilterType
     * @var string|null
     */
    private $simpleFilterType = null;

    /**
     * @ElementName criteriaActivation
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    private $criteriaActivation = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for enableFiltering
     *
     * @ElementName enableFiltering
     * @return bool|null
     */
    public function getEnableFiltering()
    {
        return $this->enableFiltering;
    }

    /**
     * Setter for enableFiltering
     *
     * @ElementName enableFiltering
     * @param bool|null $enableFiltering
     * @return $this
     */
    public function setEnableFiltering($enableFiltering)
    {
        $this->enableFiltering = $enableFiltering;
        return $this;
    }

    /**
     * Getter for filteringMode
     *
     * @ElementName filteringMode
     * @return string|null
     */
    public function getFilteringMode()
    {
        return $this->filteringMode;
    }

    /**
     * Setter for filteringMode
     *
     * @ElementName filteringMode
     * @param string|null $filteringMode
     * @return $this
     */
    public function setFilteringMode($filteringMode)
    {
        $this->filteringMode = $filteringMode;
        return $this;
    }

    /**
     * Getter for simpleFilterType
     *
     * @ElementName simpleFilterType
     * @return string|null
     */
    public function getSimpleFilterType()
    {
        return $this->simpleFilterType;
    }

    /**
     * Setter for simpleFilterType
     *
     * @ElementName simpleFilterType
     * @param string|null $simpleFilterType
     * @return $this
     */
    public function setSimpleFilterType($simpleFilterType)
    {
        $this->simpleFilterType = $simpleFilterType;
        return $this;
    }

    /**
     * Getter for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }

    /**
     * Setter for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[] $criteriaActivation
     * @return $this
     */
    public function setCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation = $criteriaActivation;
        return $this;
    }

    /**
     * Adder for criteriaActivation
     *
     * @ElementName criteriaActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation $criteriaActivation
     * @return $this
     */
    public function addCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation []= $criteriaActivation;
        return $this;
    }


}

