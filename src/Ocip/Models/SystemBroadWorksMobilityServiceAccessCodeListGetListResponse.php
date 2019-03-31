<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeListGetListResponse
 *
 * Response to SystemBroadWorksMobilityServiceAccessCodeListGetListRequest.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeListGetListRequest
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1150","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeListGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1150
     * @MinLength 1
     * @MaxLength 80
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

