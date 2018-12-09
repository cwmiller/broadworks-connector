<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementLanguageMapping
 *
 * Maps a BroadWorks language to a device-equivalent language.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:1755","type":"sequence"}]
 */
class DeviceManagementLanguageMapping
{

    /**
     * @ElementName broadWorksLanguage
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:1755
     * @var string|null
     */
    private $broadWorksLanguage = null;

    /**
     * @ElementName deviceLanguage
     * @Type string
     * @Nillable
     * @Group 8e629edbac315ae7889caca732382c44:1755
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceLanguage = null;

    /**
     * Getter for broadWorksLanguage
     *
     * @return string
     */
    public function getBroadWorksLanguage()
    {
        return $this->broadWorksLanguage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->broadWorksLanguage;
    }

    /**
     * Setter for broadWorksLanguage
     *
     * @param string $broadWorksLanguage
     * @return $this
     */
    public function setBroadWorksLanguage($broadWorksLanguage)
    {
        $this->broadWorksLanguage = $broadWorksLanguage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBroadWorksLanguage()
    {
        $this->broadWorksLanguage = null;
        return $this;
    }

    /**
     * Getter for deviceLanguage
     *
     * @return string|null
     */
    public function getDeviceLanguage()
    {
        return $this->deviceLanguage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceLanguage;
    }

    /**
     * Setter for deviceLanguage
     *
     * @param string|null $deviceLanguage
     * @return $this
     */
    public function setDeviceLanguage($deviceLanguage)
    {
        if ($deviceLanguage === null) {
            $this->deviceLanguage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deviceLanguage = $deviceLanguage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceLanguage()
    {
        $this->deviceLanguage = null;
        return $this;
    }


}

