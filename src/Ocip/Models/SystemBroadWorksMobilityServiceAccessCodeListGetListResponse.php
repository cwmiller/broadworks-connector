<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeListGetListResponse
 *
 * Response to SystemBroadWorksMobilityServiceAccessCodeListGetListRequest.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeListGetListRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:1394","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeListGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1394
     * @MinLength 1
     * @MaxLength 80
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

