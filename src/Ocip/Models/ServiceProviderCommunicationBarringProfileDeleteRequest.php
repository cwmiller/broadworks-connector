<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringProfileDeleteRequest
 *
 * Deletes an existing Communication Barring Profile.  Optionally, a new default profile can be chosen if the current default profile is being deleted.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:1804","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringProfileDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1804
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1804
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName defaultProfile
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1804
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $defaultProfile = null;

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
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for defaultProfile
     *
     * @return string
     */
    public function getDefaultProfile()
    {
        return $this->defaultProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultProfile;
    }

    /**
     * Setter for defaultProfile
     *
     * @param string $defaultProfile
     * @return $this
     */
    public function setDefaultProfile($defaultProfile)
    {
        $this->defaultProfile = $defaultProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultProfile()
    {
        $this->defaultProfile = null;
        return $this;
    }


}

