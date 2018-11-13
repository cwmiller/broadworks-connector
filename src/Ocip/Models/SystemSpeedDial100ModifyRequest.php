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
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $prefix = null;

    /**
     * Getter for prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->prefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @param string|null $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        if ($prefix === null) {
            $this->prefix = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->prefix = $prefix;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefix()
    {
        $this->prefix = null;
        return $this;
    }


}

