<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetRequest
 *
 * Requests the details of a specified service pack migration task.
 *         The response is either ServiceProviderServicePackMigrationTaskGetResponse
 *         or ErrorResponse.
 *         Replaced By: ServiceProviderServicePackMigrationTaskGetRequest14sp4
 *
 * @see ServiceProviderServicePackMigrationTaskGetResponse
 * @see ErrorResponse
 * @see ServiceProviderServicePackMigrationTaskGetRequest14sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:19112","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19112
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19112
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $taskName = null;

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


}

