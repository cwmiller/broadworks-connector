<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCustomContactDirectoryGetListResponse
 *
 * Response to the GroupCustomContactDirectoryGetListRequest.
 *         The response contains all the group's custom contact directory names.
 *
 * @see GroupCustomContactDirectoryGetListRequest
 */
class GroupCustomContactDirectoryGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @var string[]
     */
    private $name = array(
        
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


}

