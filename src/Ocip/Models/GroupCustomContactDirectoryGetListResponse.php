<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCustomContactDirectoryGetListResponse
 *
 * Response to the GroupCustomContactDirectoryGetListRequest.
 *         The response contains all the group's custom contact directory names.
 *
 * @see GroupCustomContactDirectoryGetListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3609","type":"sequence"}]
 */
class GroupCustomContactDirectoryGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3609
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $name = array(
        
    );

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

