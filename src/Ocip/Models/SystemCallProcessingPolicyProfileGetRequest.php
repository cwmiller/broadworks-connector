<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetRequest
 *
 * Request to get a call processing policy profile in system.
 *         The response is either a SystemCallProcessingPolicyProfileGetResponse or
 * an ErrorResponse.
 *         
 *         Replaced by SystemCallProcessingPolicyProfileGetRequest20.
 */
class SystemCallProcessingPolicyProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

