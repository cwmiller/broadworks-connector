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
 */
class SystemNetworkClassOfServiceGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

