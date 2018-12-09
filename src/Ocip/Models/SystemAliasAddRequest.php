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
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:1749","type":"sequence"}]
 */
class SystemAliasAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName aliasNetAddress
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:1749
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

