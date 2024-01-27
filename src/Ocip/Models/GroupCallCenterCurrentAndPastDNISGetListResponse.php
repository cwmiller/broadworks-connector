<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterCurrentAndPastDNISGetListResponse
 *
 * Response to the GroupCallCenterCurrentAndPastDNISGetListRequest.
 *
 * @see GroupCallCenterCurrentAndPastDNISGetListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:3135","type":"sequence"}]
 */
class GroupCallCenterCurrentAndPastDNISGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:3135
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $name = [
        
    ];

    /**
     * @ElementName deletedName
     * @Type string
     * @Array
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:3135
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $deletedName = [
        
    ];

    /**
     * Getter for name
     *
     * @return string[]
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string[] $name
     * @return $this
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Adder for name
     *
     * @param string $name
     * @return $this
     */
    public function addName(string $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * Getter for deletedName
     *
     * @return string[]
     */
    public function getDeletedName()
    {
        return $this->deletedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deletedName;
    }

    /**
     * Setter for deletedName
     *
     * @param string[] $deletedName
     * @return $this
     */
    public function setDeletedName(array $deletedName)
    {
        $this->deletedName = $deletedName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeletedName()
    {
        $this->deletedName = null;
        return $this;
    }

    /**
     * Adder for deletedName
     *
     * @param string $deletedName
     * @return $this
     */
    public function addDeletedName(string $deletedName)
    {
        $this->deletedName[] = $deletedName;
        return $this;
    }
}

