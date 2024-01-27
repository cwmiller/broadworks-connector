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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:23743","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:23743
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

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

