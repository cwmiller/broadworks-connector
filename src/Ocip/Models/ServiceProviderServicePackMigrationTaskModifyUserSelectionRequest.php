<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest
 *
 * Replace the list of services and packs used to select which users will be migrated.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:5687","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5687
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5687
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName userSelectionType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskUserSelectionType
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5687
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskUserSelectionType|null
     */
    private $userSelectionType = null;

    /**
     * @ElementName userServiceNameList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5687
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $userServiceNameList = null;

    /**
     * @ElementName servicePackNameList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:5687
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePackNameList = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for taskName
     *
     * @return string
     */
    public function getTaskName()
    {
        return $this->taskName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->taskName;
    }

    /**
     * Setter for taskName
     *
     * @param string $taskName
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTaskName()
    {
        $this->taskName = null;
        return $this;
    }

    /**
     * Getter for userSelectionType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskUserSelectionType
     */
    public function getUserSelectionType()
    {
        return $this->userSelectionType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userSelectionType;
    }

    /**
     * Setter for userSelectionType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskUserSelectionType $userSelectionType
     * @return $this
     */
    public function setUserSelectionType(\CWM\BroadWorksConnector\Ocip\Models\ServicePackMigrationTaskUserSelectionType $userSelectionType)
    {
        $this->userSelectionType = $userSelectionType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserSelectionType()
    {
        $this->userSelectionType = null;
        return $this;
    }

    /**
     * Getter for userServiceNameList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList|null
     */
    public function getUserServiceNameList()
    {
        return $this->userServiceNameList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userServiceNameList;
    }

    /**
     * Setter for userServiceNameList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList|null $userServiceNameList
     * @return $this
     */
    public function setUserServiceNameList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList $userServiceNameList = null)
    {
        if ($userServiceNameList === null) {
            $this->userServiceNameList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->userServiceNameList = $userServiceNameList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserServiceNameList()
    {
        $this->userServiceNameList = null;
        return $this;
    }

    /**
     * Getter for servicePackNameList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList|null
     */
    public function getServicePackNameList()
    {
        return $this->servicePackNameList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackNameList;
    }

    /**
     * Setter for servicePackNameList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList|null $servicePackNameList
     * @return $this
     */
    public function setServicePackNameList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList $servicePackNameList = null)
    {
        if ($servicePackNameList === null) {
            $this->servicePackNameList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->servicePackNameList = $servicePackNameList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackNameList()
    {
        $this->servicePackNameList = null;
        return $this;
    }


}

