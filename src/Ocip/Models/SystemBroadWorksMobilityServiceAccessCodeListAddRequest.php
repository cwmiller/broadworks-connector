<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeListAddRequest
 *
 * Add a Service Access Code list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityServiceAccessCodeListAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

