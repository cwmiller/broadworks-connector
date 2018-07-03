<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAliasAddRequest
 *
 * Add a system-level Application Server alias to the system.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAliasAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName aliasNetAddress
     * @var string|null
     */
    private $aliasNetAddress = null;

    /**
     * Getter for aliasNetAddress
     *
     * @ElementName aliasNetAddress
     * @return string|null
     */
    public function getAliasNetAddress()
    {
        return $this->aliasNetAddress;
    }

    /**
     * Setter for aliasNetAddress
     *
     * @ElementName aliasNetAddress
     * @param string|null $aliasNetAddress
     * @return $this
     */
    public function setAliasNetAddress($aliasNetAddress)
    {
        $this->aliasNetAddress = $aliasNetAddress;
        return $this;
    }


}

