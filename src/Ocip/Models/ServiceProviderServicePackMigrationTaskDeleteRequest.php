<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskDeleteRequest
 *
 * Deletes a service pack migration task. It is not possible to delete a task while
 * it is
 *         currently executing.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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


}

