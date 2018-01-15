<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallPickupGetInstanceListResponse
 *
 * Response to the GroupCallPickupGetInstanceListRequest.
 */
class GroupCallPickupGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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


}

