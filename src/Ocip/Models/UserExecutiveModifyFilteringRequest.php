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
 * @Groups [{"id":"9a6dbade05624033cf7fe782b7c9a9a7:372","type":"sequence"}]
 */
class UserExecutiveModifyFilteringRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:372
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName enableFiltering
     * @Type bool
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:372
     * @var bool|null
     */
    private $enableFiltering = null;

    /**
     * @ElementName filteringMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringMode
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:372
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringMode|null
     */
    private $filteringMode = null;

    /**
     * @ElementName simpleFilterType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringSimpleFilterType
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:372
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringSimpleFilterType|null
     */
    private $simpleFilterType = null;

    /**
     * @ElementName criteriaActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation
     * @Array
     * @Optional
     * @Group 9a6dbade05624033cf7fe782b7c9a9a7:372
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    private $criteriaActivation = array(
        
    );

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for enableFiltering
     *
     * @return bool
     */
    public function getEnableFiltering()
    {
        return $this->enableFiltering instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableFiltering;
    }

    /**
     * Setter for enableFiltering
     *
     * @param bool $enableFiltering
     * @return $this
     */
    public function setEnableFiltering($enableFiltering)
    {
        $this->enableFiltering = $enableFiltering;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableFiltering()
    {
        $this->enableFiltering = null;
        return $this;
    }

    /**
     * Getter for filteringMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringMode
     */
    public function getFilteringMode()
    {
        return $this->filteringMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filteringMode;
    }

    /**
     * Setter for filteringMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringMode $filteringMode
     * @return $this
     */
    public function setFilteringMode(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringMode $filteringMode)
    {
        $this->filteringMode = $filteringMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilteringMode()
    {
        $this->filteringMode = null;
        return $this;
    }

    /**
     * Getter for simpleFilterType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringSimpleFilterType
     */
    public function getSimpleFilterType()
    {
        return $this->simpleFilterType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->simpleFilterType;
    }

    /**
     * Setter for simpleFilterType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringSimpleFilterType $simpleFilterType
     * @return $this
     */
    public function setSimpleFilterType(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringSimpleFilterType $simpleFilterType)
    {
        $this->simpleFilterType = $simpleFilterType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSimpleFilterType()
    {
        $this->simpleFilterType = null;
        return $this;
    }

    /**
     * Getter for criteriaActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[]
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaActivation;
    }

    /**
     * Setter for criteriaActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation[] $criteriaActivation
     * @return $this
     */
    public function setCriteriaActivation(array $criteriaActivation)
    {
        $this->criteriaActivation = $criteriaActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaActivation()
    {
        $this->criteriaActivation = null;
        return $this;
    }

    /**
     * Adder for criteriaActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaActivation $criteriaActivation
     * @return $this
     */
    public function addCriteriaActivation($criteriaActivation)
    {
        $this->criteriaActivation[] = $criteriaActivation;
        return $this;
    }


}

