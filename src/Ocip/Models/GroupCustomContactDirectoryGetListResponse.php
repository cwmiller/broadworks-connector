<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCustomContactDirectoryGetListResponse
 *
 * Response to the GroupCustomContactDirectoryGetListRequest.
 *         The response contains all the group's custom contact directory names.
 *
 * @see GroupCustomContactDirectoryGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:3327","type":"sequence"}]
 */
class GroupCustomContactDirectoryGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:3327
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $name = [
        
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
}

