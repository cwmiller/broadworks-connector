<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLogConfigModifyRequest
 *
 * Modify the log configuration file.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLogConfigModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName configFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    private $configFile = null;

    /**
     * Getter for configFile
     *
     * @ElementName configFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    public function getConfigFile()
    {
        return $this->configFile;
    }

    /**
     * Setter for configFile
     *
     * @ElementName configFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileResource|null $configFile
     * @return $this
     */
    public function setConfigFile($configFile)
    {
        $this->configFile = $configFile;
        return $this;
    }


}

