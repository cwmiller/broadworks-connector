<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMGCPDeviceTypeGetResponse
 *
 * Response to SystemMGCPDeviceTypeGetRequest.
 */
class SystemMGCPDeviceTypeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isObsolete
     * @var bool|null
     */
    private $isObsolete = null;

    /**
     * @ElementName profile
     * @var string|null
     */
    private $profile = null;

    /**
     * @ElementName numberOfPorts
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $numberOfPorts = null;

    /**
     * @ElementName protocolChoice
     * @var string[]
     */
    private $protocolChoice = array(
        
    );

    /**
     * Getter for isObsolete
     *
     * @ElementName isObsolete
     * @return bool|null
     */
    public function getIsObsolete()
    {
        return $this->isObsolete;
    }

    /**
     * Setter for isObsolete
     *
     * @ElementName isObsolete
     * @param bool|null $isObsolete
     * @return $this
     */
    public function setIsObsolete($isObsolete)
    {
        $this->isObsolete = $isObsolete;
        return $this;
    }

    /**
     * Getter for profile
     *
     * @ElementName profile
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @param string|null $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Getter for numberOfPorts
     *
     * @ElementName numberOfPorts
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts;
    }

    /**
     * Setter for numberOfPorts
     *
     * @ElementName numberOfPorts
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null $numberOfPorts
     * @return $this
     */
    public function setNumberOfPorts($numberOfPorts)
    {
        $this->numberOfPorts = $numberOfPorts;
        return $this;
    }

    /**
     * Getter for protocolChoice
     *
     * @ElementName protocolChoice
     * @return string[]
     */
    public function getProtocolChoice()
    {
        return $this->protocolChoice;
    }

    /**
     * Setter for protocolChoice
     *
     * @ElementName protocolChoice
     * @param string[] $protocolChoice
     * @return $this
     */
    public function setProtocolChoice($protocolChoice)
    {
        $this->protocolChoice = $protocolChoice;
        return $this;
    }

    /**
     * Adder for protocolChoice
     *
     * @ElementName protocolChoice
     * @param string $protocolChoice
     * @return $this
     */
    public function addProtocolChoice($protocolChoice)
    {
        $this->protocolChoice []= $protocolChoice;
        return $this;
    }


}

