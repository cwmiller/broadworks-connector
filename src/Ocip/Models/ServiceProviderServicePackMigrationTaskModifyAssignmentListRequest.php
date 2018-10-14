<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyAssignmentListRequest
 *
 * Replace the list of services and packs to be assigned to users during the
 * service pack migration.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderServicePackMigrationTaskModifyAssignmentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
    public function setUserServiceNameList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList $userServiceNameList)
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
    public function setServicePackNameList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList $servicePackNameList)
    {
        $this->servicePackNameList = $servicePackNameList;
        return $this;
    }


}

