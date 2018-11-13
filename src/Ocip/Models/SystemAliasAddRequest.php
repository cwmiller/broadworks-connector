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
     * @Type string
     * @var string|null
     */
    private $aliasNetAddress = null;

    /**
     * Getter for aliasNetAddress
     *
     * @return string
     */
    public function getAliasNetAddress()
    {
        return $this->aliasNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->aliasNetAddress;
    }

    /**
     * Setter for aliasNetAddress
     *
     * @param string $aliasNetAddress
     * @return $this
     */
    public function setAliasNetAddress($aliasNetAddress)
    {
        $this->aliasNetAddress = $aliasNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAliasNetAddress()
    {
        $this->aliasNetAddress = null;
        return $this;
    }


}

