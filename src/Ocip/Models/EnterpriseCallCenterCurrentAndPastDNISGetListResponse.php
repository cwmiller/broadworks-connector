<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCurrentAndPastDNISGetListResponse
 *
 * Response to the EnterpriseCallCenterCurrentAndPastDNISGetListRequest.
 *
 * @see EnterpriseCallCenterCurrentAndPastDNISGetListRequest
 */
class EnterpriseCallCenterCurrentAndPastDNISGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setName(array $name)
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
    public function addName(string $name)
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
    public function setDeletedName(array $deletedName)
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
    public function addDeletedName(string $deletedName)
    {
        $this->deletedName []= $deletedName;
        return $this;
    }


}

