<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetRequest16
 *
 * Request to get the file repository information.
 *                 The response is either SystemFileRepositoryDeviceGetResponse16 or ErrorResponse.
 *
 *                 Replaced by: SystemFileRepositoryDeviceGetRequest20
 *
 * @see SystemFileRepositoryDeviceGetResponse16
 * @see ErrorResponse
 * @see SystemFileRepositoryDeviceGetRequest20
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:41914","type":"sequence"}]
 */
class SystemFileRepositoryDeviceGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:41914
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
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


}

