<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetRequest17
 *
 * Get an existing Network Class of Service.
 *         The response is either a SystemNetworkClassOfServiceGetResponse17
 *         or an ErrorResponse.
 *         
 *         Replaced by: SystemNetworkClassOfServiceGetRequest19sp1 in AS data mode
 *
 * @see SystemNetworkClassOfServiceGetResponse17
 * @see ErrorResponse
 * @see SystemNetworkClassOfServiceGetRequest19sp1
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:10696","type":"sequence"}]
 */
class SystemNetworkClassOfServiceGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:10696
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

