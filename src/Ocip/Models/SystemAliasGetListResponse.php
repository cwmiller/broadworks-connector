<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAliasGetListResponse
 *
 * Response to SystemAliasGetListRequest. Contains the list of all network alias' for
 *         the Application Server.
 *
 * @see SystemAliasGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2295","type":"sequence"}]
 */
class SystemAliasGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName aliasNetAddress
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:2295
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $aliasNetAddress = [
        
    ];

    /**
     * Getter for aliasNetAddress
     *
     * @return string[]
     */
    public function getAliasNetAddress()
    {
        return $this->aliasNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->aliasNetAddress;
    }

    /**
     * Setter for aliasNetAddress
     *
     * @param string[] $aliasNetAddress
     * @return $this
     */
    public function setAliasNetAddress(array $aliasNetAddress)
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

    /**
     * Adder for aliasNetAddress
     *
     * @param string $aliasNetAddress
     * @return $this
     */
    public function addAliasNetAddress(string $aliasNetAddress)
    {
        $this->aliasNetAddress[] = $aliasNetAddress;
        return $this;
    }
}

