<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringIncomingCriteriaAssignListRequest
 *
 * Assign a list of Communication Barring Incoming Criteria to a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderCommunicationBarringIncomingCriteriaAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName criteriaName
     * @var string[]
     */
    private $criteriaName = array(
        
    );

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
     * Getter for criteriaName
     *
     * @ElementName criteriaName
     * @return string[]
     */
    public function getCriteriaName()
    {
        return $this->criteriaName;
    }

    /**
     * Setter for criteriaName
     *
     * @ElementName criteriaName
     * @param string[] $criteriaName
     * @return $this
     */
    public function setCriteriaName(array $criteriaName)
    {
        $this->criteriaName = $criteriaName;
        return $this;
    }

    /**
     * Adder for criteriaName
     *
     * @ElementName criteriaName
     * @param string $criteriaName
     * @return $this
     */
    public function addCriteriaName(string $criteriaName)
    {
        $this->criteriaName []= $criteriaName;
        return $this;
    }


}

