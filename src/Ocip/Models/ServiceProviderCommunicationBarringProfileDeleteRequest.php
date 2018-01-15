<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringProfileDeleteRequest
 *
 * Deletes an existing Communication Barring Profile.  Optionally, a new default
 * profile can be chosen if the current default profile is being deleted.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderCommunicationBarringProfileDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName defaultProfile
     * @var string|null
     */
    private $defaultProfile = null;

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
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for defaultProfile
     *
     * @ElementName defaultProfile
     * @return string|null
     */
    public function getDefaultProfile()
    {
        return $this->defaultProfile;
    }

    /**
     * Setter for defaultProfile
     *
     * @ElementName defaultProfile
     * @param string|null $defaultProfile
     * @return $this
     */
    public function setDefaultProfile($defaultProfile)
    {
        $this->defaultProfile = $defaultProfile;
        return $this;
    }


}

