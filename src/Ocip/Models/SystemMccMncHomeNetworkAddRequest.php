<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMccMncHomeNetworkAddRequest
 *
 * Adds a Mcc/Mnc home network.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4489f4baeefa41b8df0a86def4c05cd8:103","type":"sequence"}]
 */
class SystemMccMncHomeNetworkAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName homeNetworkMccMnc
     * @Type string
     * @Group 4489f4baeefa41b8df0a86def4c05cd8:103
     * @MinLength 5
     * @MaxLength 6
     * @var string|null
     */
    protected $homeNetworkMccMnc = null;

    /**
     * Getter for homeNetworkMccMnc
     *
     * @return string
     */
    public function getHomeNetworkMccMnc()
    {
        return $this->homeNetworkMccMnc instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeNetworkMccMnc;
    }

    /**
     * Setter for homeNetworkMccMnc
     *
     * @param string $homeNetworkMccMnc
     * @return $this
     */
    public function setHomeNetworkMccMnc($homeNetworkMccMnc)
    {
        $this->homeNetworkMccMnc = $homeNetworkMccMnc;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeNetworkMccMnc()
    {
        $this->homeNetworkMccMnc = null;
        return $this;
    }
}

