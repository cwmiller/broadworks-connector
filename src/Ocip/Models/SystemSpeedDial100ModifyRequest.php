<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSpeedDial100ModifyRequest
 *
 * Modify the speed dial 100 system-wide default prefix setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSpeedDial100ModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName prefix
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $prefix = null;

    /**
     * Getter for prefix
     *
     * @ElementName prefix
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @ElementName prefix
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }


}

