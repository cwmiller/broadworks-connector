<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetRequest22
 *
 * Request to get the file repository information.  The response is either SystemFileRepositoryDeviceGetResponse22 or ErrorResponse.
 *
 * @see SystemFileRepositoryDeviceGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10437","type":"sequence"}]
 */
class SystemFileRepositoryDeviceGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:10437
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

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

