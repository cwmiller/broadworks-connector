<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaGroupUsageListRequest
 *
 * Request to get the list of SAC groups associated with a media group.
 *         The response is either SystemMediaGroupUsageListResponse or ErrorResponse.
 *
 * @see SystemMediaGroupUsageListResponse
 * @see ErrorResponse
 */
class SystemMediaGroupUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

