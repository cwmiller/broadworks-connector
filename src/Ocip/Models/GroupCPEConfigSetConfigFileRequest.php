<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCPEConfigSetConfigFileRequest
 *
 * Request to set a new group default configuration file for a device type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCPEConfigSetConfigFileRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName configFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    private $configFile = null;

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
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Getter for configFile
     *
     * @ElementName configFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    public function getConfigFile()
    {
        return $this->configFile;
    }

    /**
     * Setter for configFile
     *
     * @ElementName configFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileResource|null $configFile
     * @return $this
     */
    public function setConfigFile($configFile)
    {
        $this->configFile = $configFile;
        return $this;
    }


}

