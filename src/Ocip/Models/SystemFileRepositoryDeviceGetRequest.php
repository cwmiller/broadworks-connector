<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetRequest
 *
 * Request to get the file repository information.
 *             The response is either SystemFileRepositoryDeviceGetResponse or
 * ErrorResponse.
 *             
 *             Replaced by: SystemFileRepositoryDeviceGetRequest16
 *
 * @see SystemFileRepositoryDeviceGetResponse
 * @see ErrorResponse
 * @see SystemFileRepositoryDeviceGetRequest16
 */
class SystemFileRepositoryDeviceGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
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

