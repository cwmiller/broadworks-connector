<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAliasGetListResponse
 *
 * Response to SystemAliasGetListRequest. Contains the list of all network alias'
 * for
 *         the Application Server.
 */
class SystemAliasGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName aliasNetAddress
     * @var string[]
     */
    private $aliasNetAddress = array(
        
    );

    /**
     * Getter for aliasNetAddress
     *
     * @ElementName aliasNetAddress
     * @return string[]
     */
    public function getAliasNetAddress()
    {
        return $this->aliasNetAddress;
    }

    /**
     * Setter for aliasNetAddress
     *
     * @ElementName aliasNetAddress
     * @param string[] $aliasNetAddress
     * @return $this
     */
    public function setAliasNetAddress($aliasNetAddress)
    {
        $this->aliasNetAddress = $aliasNetAddress;
        return $this;
    }

    /**
     * Adder for aliasNetAddress
     *
     * @ElementName aliasNetAddress
     * @param string $aliasNetAddress
     * @return $this
     */
    public function addAliasNetAddress($aliasNetAddress)
    {
        $this->aliasNetAddress []= $aliasNetAddress;
        return $this;
    }


}

