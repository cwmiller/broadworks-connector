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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2249","type":"sequence"}]
 */
class SystemAliasAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName aliasNetAddress
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2249
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $aliasNetAddress = null;

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

