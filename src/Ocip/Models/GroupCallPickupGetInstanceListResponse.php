<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallPickupGetInstanceListResponse
 *
 * Response to the GroupCallPickupGetInstanceListRequest.
 *
 * @see GroupCallPickupGetInstanceListRequest
 * @Groups [{"id":"045ce951b3e25dec090606af4ad50c63:205","type":"sequence"}]
 */
class GroupCallPickupGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group 045ce951b3e25dec090606af4ad50c63:205
     * @MinLength 1
     * @MaxLength 80
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

