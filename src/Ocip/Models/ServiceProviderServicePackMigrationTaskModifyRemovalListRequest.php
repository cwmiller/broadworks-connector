<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskModifyRemovalListRequest
 *
 * Replace the list of services and packs to be removed from users during the service pack migration.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:5467","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskModifyRemovalListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5467
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5467
     * @var string|null
     */
    private $taskName = null;

    /**
     * @ElementName userServiceNameList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList
     * @Nillable
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5467
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $userServiceNameList = null;

    /**
     * @ElementName servicePackNameList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList
     * @Nillable
     * @Optional
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:5467
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
    public function setUserServiceNameList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserServiceList $userServiceNameList)
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
    public function setServicePackNameList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementServicePackNameList $servicePackNameList)
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

