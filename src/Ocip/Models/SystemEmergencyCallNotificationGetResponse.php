<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEmergencyCallNotificationGetResponse
 *
 * Response to SystemEmergencyCallNotificationGetResponse.
 *
 * @see SystemEmergencyCallNotificationGetResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9827","type":"sequence"}]
 */
class SystemEmergencyCallNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:9827
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultFromAddress = null;

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }
}

