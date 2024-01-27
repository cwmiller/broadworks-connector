<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetRequest21
 *
 * Requests the details of a specified service pack migration task.
 *         The response is either ServiceProviderServicePackMigrationTaskGetResponse21
 *         or ErrorResponse.
 *
 * @see ServiceProviderServicePackMigrationTaskGetResponse21
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6452","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskGetRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6452
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:6452
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $taskName = null;

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

