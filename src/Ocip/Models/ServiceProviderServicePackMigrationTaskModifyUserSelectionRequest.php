<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest
 *
 * Replace the list of services and packs used to select which users will be
 * migrated.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName userSelectionType
     * @var string|null
     */
    private $userSelectionType = null;

    /**
     * @ElementName userServiceNameList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList|null
     */
    private $userServiceNameList = null;

    /**
     * @ElementName servicePackNameList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList|null
     */
    private $servicePackNameList = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for taskName
     *
     * @ElementName taskName
     * @return string|null
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * Setter for taskName
     *
     * @ElementName taskName
     * @param string|null $taskName
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * Getter for userSelectionType
     *
     * @ElementName userSelectionType
     * @return string|null
     */
    public function getUserSelectionType()
    {
        return $this->userSelectionType;
    }

    /**
     * Setter for userSelectionType
     *
     * @ElementName userSelectionType
     * @param string|null $userSelectionType
     * @return $this
     */
    public function setUserSelectionType($userSelectionType)
    {
        $this->userSelectionType = $userSelectionType;
        return $this;
    }

    /**
     * Getter for userServiceNameList
     *
     * @ElementName userServiceNameList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList|null
     */
    public function getUserServiceNameList()
    {
        return $this->userServiceNameList;
    }

    /**
     * Setter for userServiceNameList
     *
     * @ElementName userServiceNameList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList|null $userServiceNameList
     * @return $this
     */
    public function setUserServiceNameList($userServiceNameList)
    {
        $this->userServiceNameList = $userServiceNameList;
        return $this;
    }

    /**
     * Getter for servicePackNameList
     *
     * @ElementName servicePackNameList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList|null
     */
    public function getServicePackNameList()
    {
        return $this->servicePackNameList;
    }

    /**
     * Setter for servicePackNameList
     *
     * @ElementName servicePackNameList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList|null $servicePackNameList
     * @return $this
     */
    public function setServicePackNameList($servicePackNameList)
    {
        $this->servicePackNameList = $servicePackNameList;
        return $this;
    }


}

