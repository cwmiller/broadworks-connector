<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeListGetListResponse
 *
 * Response to SystemBroadWorksMobilityServiceAccessCodeListGetListRequest.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeListGetListRequest
 * @Groups [{"id":"5d94cb4fd2bf88ffe6e6d2193917a6ff:1007","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeListGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group 5d94cb4fd2bf88ffe6e6d2193917a6ff:1007
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

