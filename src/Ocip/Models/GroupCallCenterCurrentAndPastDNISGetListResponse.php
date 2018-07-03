<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterCurrentAndPastDNISGetListResponse
 *
 * Response to the GroupCallCenterCurrentAndPastDNISGetListRequest.
 *
 * @see GroupCallCenterCurrentAndPastDNISGetListRequest
 */
class GroupCallCenterCurrentAndPastDNISGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @var string[]
     */
    private $name = array(
        
    );

    /**
     * @ElementName deletedName
     * @var string[]
     */
    private $deletedName = array(
        
    );

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string[] $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adder for name
     *
     * @ElementName name
     * @param string $name
     * @return $this
     */
    public function addName($name)
    {
        $this->name []= $name;
        return $this;
    }

    /**
     * Getter for deletedName
     *
     * @ElementName deletedName
     * @return string[]
     */
    public function getDeletedName()
    {
        return $this->deletedName;
    }

    /**
     * Setter for deletedName
     *
     * @ElementName deletedName
     * @param string[] $deletedName
     * @return $this
     */
    public function setDeletedName($deletedName)
    {
        $this->deletedName = $deletedName;
        return $this;
    }

    /**
     * Adder for deletedName
     *
     * @ElementName deletedName
     * @param string $deletedName
     * @return $this
     */
    public function addDeletedName($deletedName)
    {
        $this->deletedName []= $deletedName;
        return $this;
    }


}

