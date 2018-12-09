<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAliasGetListResponse
 *
 * Response to SystemAliasGetListRequest. Contains the list of all network alias' for
 *         the Application Server.
 *
 * @see SystemAliasGetListRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:1795","type":"sequence"}]
 */
class SystemAliasGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName aliasNetAddress
     * @Type string
     * @Array
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:1795
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

