<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderEnhancedCallLogsSchemaInstanceModifyRequest
 *
 * Modify the Enhanced Call Logs schema instance associated with this Service Provider.
 *       The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1b5ee40628a3f2b1bcab94a53dec91e7:187","type":"sequence"}]
 */
class ServiceProviderEnhancedCallLogsSchemaInstanceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:187
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName name
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:187
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $name = null;

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
     * @return string|null
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string|null $name
     * @return $this
     */
    public function setName($name = null)
    {
        if ($name === null) {
            $this->name = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->name = $name;
        }
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
}

