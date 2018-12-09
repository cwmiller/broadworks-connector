<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetRequest
 *
 * Request to get a call processing policy profile in system.
 *         The response is either a SystemCallProcessingPolicyProfileGetResponse or an ErrorResponse.
 *         
 *         Replaced by SystemCallProcessingPolicyProfileGetRequest20.
 *
 * @see SystemCallProcessingPolicyProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileGetRequest20
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:19695","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:19695
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

