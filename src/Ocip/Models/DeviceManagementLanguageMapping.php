<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementLanguageMapping
 *
 * Maps a BroadWorks language to a device-equivalent language.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:2839","type":"sequence"}]
 */
class DeviceManagementLanguageMapping
{
    /**
     * @ElementName broadWorksLanguage
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2839
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $broadWorksLanguage = null;

    /**
     * @ElementName deviceLanguage
     * @Type string
     * @Nillable
     * @Group 6337d0cfba4de1c83587203c5b0bae54:2839
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $deviceLanguage = null;

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
    public function setDeviceLanguage($deviceLanguage = null)
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

