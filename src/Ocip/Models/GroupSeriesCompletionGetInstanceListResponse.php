<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSeriesCompletionGetInstanceListResponse
 *
 * Response to the GroupSeriesCompletionGetInstanceListRequest.
 *
 * @see GroupSeriesCompletionGetInstanceListRequest
 * @Groups [{"id":"5fb5b7b7662e17019e762f6db743dda1:144","type":"sequence"}]
 */
class GroupSeriesCompletionGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group 5fb5b7b7662e17019e762f6db743dda1:144
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $name = [
        
    ];

    /**
     * Getter for name
     *
     * @return string[]
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string[] $name
     * @return $this
     */
    public function setName(array $name)
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

    /**
     * Adder for name
     *
     * @param string $name
     * @return $this
     */
    public function addName(string $name)
    {
        $this->name[] = $name;
        return $this;
    }
}

