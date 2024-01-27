<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemHomeNetworkDeleteRequest
 *
 * Delete a Home Network.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:11352","type":"sequence"}]
 */
class SystemHomeNetworkDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName mscAddress
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:11352
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $mscAddress = null;

    /**
     * Getter for mscAddress
     *
     * @return string
     */
    public function getMscAddress()
    {
        return $this->mscAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mscAddress;
    }

    /**
     * Setter for mscAddress
     *
     * @param string $mscAddress
     * @return $this
     */
    public function setMscAddress($mscAddress)
    {
        $this->mscAddress = $mscAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMscAddress()
    {
        $this->mscAddress = null;
        return $this;
    }
}

