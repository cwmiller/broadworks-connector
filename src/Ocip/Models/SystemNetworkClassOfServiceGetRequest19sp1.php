<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetRequest19sp1
 *
 * Get an existing Network Class of Service.
 *         The response is either a SystemNetworkClassOfServiceGetResponse19sp1
 *         or an ErrorResponse.
 */
class SystemNetworkClassOfServiceGetRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

