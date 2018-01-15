<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetRequest16
 *
 * Request to get the file repository information.  The response is either
 * SystemFileRepositoryDeviceGetResponse16 or ErrorResponse.
 */
class SystemFileRepositoryDeviceGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

