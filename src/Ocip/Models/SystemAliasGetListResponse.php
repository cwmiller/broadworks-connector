<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAliasGetListResponse
 *
 * Response to SystemAliasGetListRequest. Contains the list of all network alias' for
 *         the Application Server.
 *
 * @see SystemAliasGetListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:1795","type":"sequence"}]
 */
class SystemAliasGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName aliasNetAddress
     * @Type string
     * @Array
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:1795
     * @var string[]
     */
    private $aliasNetAddress = array(
        
    );

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

