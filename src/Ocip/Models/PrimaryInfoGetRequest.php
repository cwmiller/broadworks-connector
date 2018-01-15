<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PrimaryInfoGetRequest
 *
 * Requests information about the primary server for high-availability support.
 */
class PrimaryInfoGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * Dual homed side is private?
     *               
     *
     * @ElementName isPrivate
     * @var bool|null
     */
    private $isPrivate = null;

    /**
     * For optimization, we only get the hostname and addresses for primary if
     *                 they are explicitly requested or if the current server is not the primary.
     *                 So you might get back the list of server addresses even if you did not
     *                 ask for the list if the request is not serviced by the primary server.
     *               
     *
     * @ElementName isAddressInfoRequested
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
     * @ElementName isPrivate
     * @return bool|null
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * Setter for isPrivate
     *
     *
     *                 Dual homed side is private?
     *               
     *
     * @ElementName isPrivate
     * @param bool|null $isPrivate
     * @return $this
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
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
     * @ElementName isAddressInfoRequested
     * @return bool|null
     */
    public function getIsAddressInfoRequested()
    {
        return $this->isAddressInfoRequested;
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
     * @ElementName isAddressInfoRequested
     * @param bool|null $isAddressInfoRequested
     * @return $this
     */
    public function setIsAddressInfoRequested($isAddressInfoRequested)
    {
        $this->isAddressInfoRequested = $isAddressInfoRequested;
        return $this;
    }


}

