<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetRequest14sp4
 *
 * Requests the details of a specified service pack migration task.
 *         The response is either ServiceProviderServicePackMigrationTaskGetResponse14sp4
 *         or ErrorResponse.
 *         
 *         Replaced By: ServiceProviderServicePackMigrationTaskGetRequest21 in AS data mode
 *
 * @see ServiceProviderServicePackMigrationTaskGetResponse14sp4
 * @see ErrorResponse
 * @see ServiceProviderServicePackMigrationTaskGetRequest21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:2874","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskGetRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:2874
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName taskName
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:2874
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

