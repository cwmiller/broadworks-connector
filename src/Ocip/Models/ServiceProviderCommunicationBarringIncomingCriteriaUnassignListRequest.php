<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringIncomingCriteriaUnassignListRequest
 *
 * Unassign a list of Communication Barring Incoming Criteria from a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:1747","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringIncomingCriteriaUnassignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1747
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName criteriaName
     * @Type string
     * @Array
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1747
     * @var string[]
     */
    private $criteriaName = array(
        
    );

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
     * Getter for criteriaName
     *
     * @return string[]
     */
    public function getCriteriaName()
    {
        return $this->criteriaName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @param string[] $criteriaName
     * @return $this
     */
    public function setCriteriaName(array $criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaName()
    {
        $this->criteriaName = null;
        return $this;
    }

    /**
     * Adder for criteriaName
     *
     * @param string $criteriaName
     * @return $this
     */
    public function addCriteriaName(string $criteriaName)
    {
        $this->criteriaName[] = $criteriaName;
        return $this;
    }


}

