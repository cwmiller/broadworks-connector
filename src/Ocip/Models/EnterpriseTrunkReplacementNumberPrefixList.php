<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseTrunkReplacementNumberPrefixList
 *
 * A list of prefixes that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class EnterpriseTrunkReplacementNumberPrefixList
{

    /**
     * @ElementName numberPrefix
     * @var string[]
     */
    private $numberPrefix = array(
        
    );

    /**
     * Getter for numberPrefix
     *
     * @ElementName numberPrefix
     * @return string[]
     */
    public function getNumberPrefix()
    {
        return $this->numberPrefix;
    }

    /**
     * Setter for numberPrefix
     *
     * @ElementName numberPrefix
     * @param string[] $numberPrefix
     * @return $this
     */
    public function setNumberPrefix(array $numberPrefix)
    {
        $this->numberPrefix = $numberPrefix;
        return $this;
    }

    /**
     * Adder for numberPrefix
     *
     * @ElementName numberPrefix
     * @param string $numberPrefix
     * @return $this
     */
    public function addNumberPrefix(string $numberPrefix)
    {
        $this->numberPrefix []= $numberPrefix;
        return $this;
    }


}

