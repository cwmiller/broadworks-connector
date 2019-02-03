<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PrimaryInfoGetRequest
 *
 * Requests information about the primary server for high-availability support.
 *         The response is either PrimaryInfoGetResponse or ErrorResponse
 *
 * @see PrimaryInfoGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:502","type":"sequence"}]
 */
class PrimaryInfoGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isPrivate
     * @Type bool
     * @Group 6b27fcc79475236456fc113a42b75543:502
     * @var bool|null
     */
    private $isPrivate = null;

    /**
     * @ElementName isAddressInfoRequested
     * @Type bool
     * @Group 6b27fcc79475236456fc113a42b75543:502
     * @var bool|null
     */
    private $isAddressInfoRequested = null;

    /**
     * Getter for isPrivate
     *
     *
     *                 Dual homed side is private?
     *               
     *
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->isPrivate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isPrivate;
    }

    /**
     * Setter for isPrivate
     *
     *
     *                 Dual homed side is private?
     *               
     *
     * @param bool $isPrivate
     * @return $this
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsPrivate()
    {
        $this->isPrivate = null;
        return $this;
    }

    /**
     * Getter for isAddressInfoRequested
     *
     *
     *                 For optimization, we only get the hostname and addresses for primary if
     *                 they are explicitly requested or if the current server is not the primary.
     *                 So you might get back the list of server addresses even if you did not
     *                 ask for the list if the request is not serviced by the primary server.
     *               
     *
     * @return bool
     */
    public function getIsAddressInfoRequested()
    {
        return $this->isAddressInfoRequested instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isAddressInfoRequested;
    }

    /**
     * Setter for isAddressInfoRequested
     *
     *
     *                 For optimization, we only get the hostname and addresses for primary if
     *                 they are explicitly requested or if the current server is not the primary.
     *                 So you might get back the list of server addresses even if you did not
     *                 ask for the list if the request is not serviced by the primary server.
     *               
     *
     * @param bool $isAddressInfoRequested
     * @return $this
     */
    public function setIsAddressInfoRequested($isAddressInfoRequested)
    {
        $this->isAddressInfoRequested = $isAddressInfoRequested;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsAddressInfoRequested()
    {
        $this->isAddressInfoRequested = null;
        return $this;
    }


}

