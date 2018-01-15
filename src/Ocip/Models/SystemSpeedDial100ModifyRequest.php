<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSpeedDial100ModifyRequest
 *
 * Modify the speed dial 100 system-wide default prefix setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSpeedDial100ModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName prefix
     * @var string|null
     */
    private $prefix = null;

    /**
     * Getter for prefix
     *
     * @ElementName prefix
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @ElementName prefix
     * @param string|null $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }


}

