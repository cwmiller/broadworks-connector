<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceDeleteRequest
 *
 * Delete a Network Class of Service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkClassOfServiceDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

