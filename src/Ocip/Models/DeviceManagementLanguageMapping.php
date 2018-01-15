<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementLanguageMapping
 *
 * Maps a BroadWorks language to a device-equivalent language.
 */
class DeviceManagementLanguageMapping
{

    /**
     * @ElementName broadWorksLanguage
     * @var string|null
     */
    private $broadWorksLanguage = null;

    /**
     * @ElementName deviceLanguage
     * @var string|null
     */
    private $deviceLanguage = null;

    /**
     * Getter for broadWorksLanguage
     *
     * @ElementName broadWorksLanguage
     * @return string|null
     */
    public function getBroadWorksLanguage()
    {
        return $this->broadWorksLanguage;
    }

    /**
     * Setter for broadWorksLanguage
     *
     * @ElementName broadWorksLanguage
     * @param string|null $broadWorksLanguage
     * @return $this
     */
    public function setBroadWorksLanguage($broadWorksLanguage)
    {
        $this->broadWorksLanguage = $broadWorksLanguage;
        return $this;
    }

    /**
     * Getter for deviceLanguage
     *
     * @ElementName deviceLanguage
     * @return string|null
     */
    public function getDeviceLanguage()
    {
        return $this->deviceLanguage;
    }

    /**
     * Setter for deviceLanguage
     *
     * @ElementName deviceLanguage
     * @param string|null $deviceLanguage
     * @return $this
     */
    public function setDeviceLanguage($deviceLanguage)
    {
        $this->deviceLanguage = $deviceLanguage;
        return $this;
    }


}

