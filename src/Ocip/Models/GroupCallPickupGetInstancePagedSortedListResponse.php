<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallPickupGetInstancePagedSortedListResponse
 *
 * Response to the GroupCallPickupGetInstancePagedSortedListRequest.
 *
 * @see GroupCallPickupGetInstancePagedSortedListRequest
 * @Groups [{"id":"045ce951b3e25dec090606af4ad50c63:249","type":"sequence"}]
 */
class GroupCallPickupGetInstancePagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group 045ce951b3e25dec090606af4ad50c63:249
     * @var string[]
     */
    private $name = array(
        
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

